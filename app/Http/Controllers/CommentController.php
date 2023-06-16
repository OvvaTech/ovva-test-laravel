<?php

namespace App\Http\Controllers;

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
