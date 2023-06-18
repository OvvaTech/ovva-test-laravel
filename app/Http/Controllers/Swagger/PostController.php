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
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="title", type="string", example="Some title"),
 *             @OA\Property(property="content", type="string", example="Some content"),
 *             @OA\Property(property="created_at", type="timestamp", example="2023-06-17T18:31:55.000000Z"),
 *             @OA\Property(property="updated_at", type="timestamp", example="2023-06-17T18:31:55.000000Z"),
 *             @OA\Property(property="image", type="image", example="image.png"),
 *         ),
 *     ),
 *     path="/api/posts",
 *     summary="Get one post",
 *     tags={"Post"},
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOF={
 *                 @OA\Schema(
 *                     @OA\Property(property="id", type="integer", example=1),
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="title", type="string", example="Some title"),
 *             @OA\Property(property="content", type="string", example="Some content"),
 *             @OA\Property(property="created_at", type="timestamp", example="2023-06-17T18:31:55.000000Z"),
 *             @OA\Property(property="updated_at", type="timestamp", example="2023-06-17T18:31:55.000000Z"),
 *             @OA\Property(property="image", type="image", example="image1.png"),
 *         ),
 *     ),
 * ),
 */
class PostController extends Controller
{
    //
}
