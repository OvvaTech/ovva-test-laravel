<?php

namespace App\Http\Controllers;

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
        //
    }

    public function show()
    {
        //
    }

    public function store()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
