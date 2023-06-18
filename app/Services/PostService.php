<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Storage;

class PostService
{
    private PostRepository $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function getAll()
    {
        $posts = $this->postRepository->getAll();

        return response()->json([
            'posts' => $posts
        ]);
    }

    public function getOne($post)
    {
        $post = $this->postRepository->getOne($post);

        return response()->json([
            'post' => $post
        ]);
    }

    public function create($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $request['image'] = $imagePath;
        }

        $this->postRepository->create($request);
    }

    public function update($request, $post)
    {
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $request['image'] = $imagePath;
        }

        $this->postRepository->update($request, $post);
    }

    public function delete($post)
    {
        $this->postRepository->delete($post);
    }
}
