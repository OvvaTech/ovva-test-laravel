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

    //
}
