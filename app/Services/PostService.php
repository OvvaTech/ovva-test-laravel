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

    public function getOne($id)
    {
        $post = $this->postRepository->getOne($id);

        return response()->json([
            'post' => $post
        ]);
    }

    public function create($request)
    {
        $this->postRepository->create($request);
    }

    public function update($request, $id)
    {
        $this->postRepository->update($request, $id);
    }

    public function delete($id)
    {
        $this->postRepository->delete($id);
    }
}
