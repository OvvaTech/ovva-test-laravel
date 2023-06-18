<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAll()
    {
        $posts = Post::paginate(10);

        return response()->json([
            'posts' => $posts
        ]);
    }

    public function getOne($post)
    {
        $post = Post::find($post);

        return response()->json([
            'post' => $post
        ]);
    }

    public function create($request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }

    public function update($request, $post)
    {
        $post->update($request);

//        $post->fresh();
    }

    public function delete($post)
    {
        $post->delete();
    }
}
