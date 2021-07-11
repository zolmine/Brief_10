<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use DateTime;
use Illuminate\Http\RedirectResponse;

class CommentsController extends Controller
{
    public function createNewComment($param): RedirectResponse
    {
        $data = array(
            "commentPostId" => $param,
            "commentUserId" => auth()->user()->userId,
            "commentContent" => $_POST['comment'],
            "commentDate"   =>  (new DateTime)->format('Y-m-d')
        );
//        $singlePost = Posts::all()->where('postId', '=', $param)->first();

        (new Comments)->insertComment($data);

        return back();

    }
}
