<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Models\Post;

class CommentRepository
{
    public function getAll()
    {
        $comments = Comment::all();

        return response()->json([
            'comments' => $comments
        ]);
    }

    public function getOne($comment)
    {
        $comment = Comment::find($comment);

        return response()->json([
            'comment' => $comment
        ]);
    }

    public function create($request)
    {
        if (Post::find($request->post_id)) {
            Comment::create($request);
        }
    }

    public function update($request, $comment)
    {
        $comment->update($request);

//        $comment->fresh();
    }

    public function delete($comment)
    {
        $comment->delete();
    }
}
