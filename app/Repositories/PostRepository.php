<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAll()
    {
        $posts = Post::paginate(15);

        return compact('posts');
    }

    public function getOne($id)
    {
        $post = Post::find($id);

        return compact('post');
    }

    public function create($request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }

    public function update($request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();
    }

    public function delete($id)
    {
        Post::destroy($id);
    }
}
