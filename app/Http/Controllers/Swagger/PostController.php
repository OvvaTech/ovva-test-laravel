<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Routing\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Get all posts",
 *     tags={"Post"},
 *     @OA\RequestBody(),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     ),
 * ),
 */
class PostController extends Controller
{
    //
}
