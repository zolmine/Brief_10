<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
    use HasFactory;

    public function createNewPost($data)
    {
        DB::table('posts')
            ->insert($data);
    }

    public function getAllPosts(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Posts::all();
    }

    public function getPostsByID($id): \Illuminate\Database\Eloquent\Collection|array
    {
        return Posts::all()->where('userId', '=', $id);
    }

    public function getPostswithCommentNumber(): \Illuminate\Support\Collection
    {
      return DB::table('posts')
          ->join('users', 'userId', '=', 'postUserId')
          ->select()
          ->get();

    }
}
