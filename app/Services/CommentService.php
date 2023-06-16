<?php

namespace App\Services;

use App\Repositories\CommentRepository;

class CommentService
{
    private CommentRepository $commentRepository;

    public function __construct()
    {
        $this->commentRepository = new CommentRepository();
    }

    //
}
