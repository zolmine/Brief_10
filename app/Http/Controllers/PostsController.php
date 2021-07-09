<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\User;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(): Factory|View|Application
    {

        $allPosts = (new Posts)->getPostswithCommentNumber();
        $rows = array();
        foreach ($allPosts as $row) {
            $comment = Comments::all()->where('commentPostId', '=', $row->postId)->count();

            $data = array(
                "postId" => $row->postId,
                "postUserId" => $row->postUserId,
                "postTitle" => $row->postTitle,
                "postDescription" => $row->postDescription,
                "postDate" => $row->postDate,
                "userId" => $row->userId,
                "fullName" => $row->fullName,
                "commentNbr" => $comment
            );
            array_push($rows, $data);
        }

        return view('posts.homePosts', [
            "allPosts" => $rows
        ]);


    }

    public function createNewPost(): RedirectResponse
    {
        $data = array(
            "postUserId" => auth()->user()->userId,
            "postTitle" => $_POST['title'],
            "postDescription" => $_POST['description'],
            "postContent" => $_POST['content'],
            "postDate" => (new DateTime)->format('Y-m-d\TH:i:s')
        );
        (new Posts)->createNewPost($data);
        return redirect()->route('posts');

    }

    public function singlePost($param): Factory|View|Application
    {
//        $author = User::all()->where('')
        $post = Posts::all()->where('postId', '=', $param)->first();
        $result = Comments::all()->where('commentPostId', '=', $param);
        $user = User::all()->where('userId', '=', $post->postUserId)->first();

        $commentUser = array();
        $results = array();
        foreach ($result as $row) {
            $user_comment = User::all()->where('userId', '=', $row->commentUserId)->first();
            array_push($commentUser, $user_comment);
            array_push($results, $row);
        }
        return view('posts.singlePost', [
            "singlePost" => $post,
            "result" => $results,
            "user" => $user,
            "commentUser" => $commentUser
        ]);

    }
}
