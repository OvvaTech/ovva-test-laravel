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

    public function getAll()
    {
        $comments = $this->commentRepository->getAll();

        return response()->json([
            'comments' => $comments,
        ]);
    }

    public function getOne($comment)
    {
        $comment = $this->commentRepository->getOne($comment);

        return response()->json([
            'comment' => $comment,
        ]);
    }

    public function create($request)
    {
        $this->commentRepository->create($request);
    }

    public function update($request, $comment)
    {
        $this->commentRepository->update($request, $comment);
    }

    public function delete($comment)
    {
        $this->commentRepository->delete($comment);
    }
}
