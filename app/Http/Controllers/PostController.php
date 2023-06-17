<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    private PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function index()
    {
        $posts = $this->postService->getAll();

        return response()->json([
           'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        $post = $this->postService->getOne($post);

        return response()->json([
           'post' => $post
        ]);
    }

    public function store(StoreRequest $request)
    {
        $request->validated();

        $this->postService->create($request);
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $request->validated();

        $this->postService->update($request, $post);
    }

    public function destroy(Post $post)
    {
        $this->postService->delete($post);
    }
}
