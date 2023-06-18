<?php

namespace App\Services;

use App\Repositories\PostRepository;

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
        $this->postRepository->create($request);
    }

    public function update($request, $post)
    {
        $this->postRepository->update($request, $post);
    }

    public function delete($post)
    {
        $this->postRepository->delete($post);
    }
}
