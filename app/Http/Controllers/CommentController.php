<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    private CommentService $commentService;

    public function __construct()
    {
        $this->commentService = new CommentService();
    }

    public function index()
    {
        $comments = $this->commentService->getAll();

        return response()->json([
           'comments' => $comments
        ]);
    }

    public function show(Comment $comment)
    {
        $comment = $this->commentService->getOne($comment);

        return response()->json([
           'comment' => $comment
        ]);
    }

    public function store(StoreRequest $request)
    {
        if (!($request->validated())) {
            return response()->json(['message' => 'Validation error']);
        }

        $this->commentService->create($request);
    }

    public function update(UpdateRequest $request, Comment $comment)
    {
        if (!($request->validated())) {
            return response()->json(['message' => 'Validation error']);
        }

        $this->commentService->update($request, $comment);
    }

    public function destroy($comment)
    {
        $this->commentService->delete($comment);
    }
}
