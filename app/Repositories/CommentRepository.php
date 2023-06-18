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
            'comments' => $comments,
        ]);
    }

    public function getOne($comment)
    {
        $comment = Comment::find($comment->id);

        return response()->json([
            'comment' => $comment,
        ]);
    }

    public function create($request)
    {
        if (Post::find($request->post_id)) {
            Comment::create([
                'post_id' => $request->post_id,
                'author' => $request->author,
                'text' => $request->text,
            ]);
        }
    }

    public function update($request, $comment)
    {
        $comment = Comment::find($comment->id);

        $comment->post_id = $request->post_id;
        $comment->author = $request->author;
        $comment->text = $request->text;

        $comment->save();
    }

    public function delete($comment)
    {
        $comment->delete($comment->id);
    }
}
