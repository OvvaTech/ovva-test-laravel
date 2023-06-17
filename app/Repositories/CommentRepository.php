<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    public function getAll()
    {
        $comments = Comment::all();

        return compact('comments');
    }

    public function getOne($id)
    {
        $comment = Comment::find($id);

        return compact('comment');
    }

    public function create($request)
    {
        Comment::create([
            'post_id' => $request->post_id,
            'author' => $request->author,
            'text' => $request->text
        ]);
    }

    public function update($request, $id)
    {
        $comment = Comment::find($id);

        $comment->post_id = $request->post_id;
        $comment->author = $request->author;
        $comment->text = $request->text;

        $comment->save();
    }

    public function delete($id)
    {
        Comment::destroy($id);
    }
}
