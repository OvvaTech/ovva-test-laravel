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
        $post = Post::find($post->id);

        return response()->json([
            'post' => $post
        ]);
    }

    public function create($request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image
        ]);
    }

    public function update($request, $post)
    {
        $post = Post::find($post->id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();
    }

    public function delete($post)
    {
        $post->delete($post->id);
    }
}
