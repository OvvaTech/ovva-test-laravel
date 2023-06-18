<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Routing\Controller;

/**
 * @OA\Info(
 *     title="API Doc",
 *     version="1.0"
 * ),
 * @OA\PathItem(
 *     path="/api/"
 * )
 * @OA\Components(
 *     @OA\SecurityScheme(
 *         securityScheme="bearerAuth",
 *         type="http",
 *         scheme="bearer"
 *     )
 * )
 */
class SwaggerController extends Controller
{
    //
}
