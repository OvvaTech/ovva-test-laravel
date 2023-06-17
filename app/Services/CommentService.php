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

        return compact('comments');
    }

    public function getOne($id)
    {
        $comment = $this->commentRepository->getOne($id);

        return compact('comment');
    }

    public function create($request)
    {
        $this->commentRepository->create($request);
    }

    public function update($request, $id)
    {
        $this->commentRepository->update($request, $id);
    }

    public function delete($id)
    {
        $this->commentRepository->delete($id);
    }
}
