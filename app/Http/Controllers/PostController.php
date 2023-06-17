<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
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

        return view('welcome', compact('posts'));
    }

    public function show($id)
    {
        $post = $this->postService->getOne($id);

        return view('welcome', compact('post'));
    }

    public function store(StoreRequest $request)
    {
        $request->validated();

        $this->postService->create($request);
    }

    public function update(UpdateRequest $request, $id)
    {
        $request->validated();

        $this->postService->update($request, $id);
    }

    public function destroy($id)
    {
        $this->postService->delete($id);
    }
}
