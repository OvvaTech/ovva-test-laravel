<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
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

        return view('welcome', compact('comments'));
    }

    public function show($id)
    {
        $comment = $this->commentService->getOne($id);

        return view('welcome', compact('comment'));
    }

    public function store(StoreRequest $request)
    {
        $request->validated();

        $this->commentService->create($request);
    }

    public function update(UpdateRequest $request, $id)
    {
        $request->validated();

        $this->commentService->update($request, $id);
    }

    public function destroy($id)
    {
        $this->commentService->delete($id);
    }
}
