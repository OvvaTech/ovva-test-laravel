<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResources([
//    'posts' => PostController::class,
//    'comments' => CommentController::class,
//]);

// Auth Routes
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('auth.logout');

// API Routes
Route::middleware('auth:sanctum')->group(function (){
    // Post Routes
    Route::get('/posts', [PostController::class , 'index'])->name('posts.index');
    Route::get('/posts/{id}', [PostController::class , 'show'])->name('posts.show');
    Route::post('/posts', [PostController::class , 'store'])->name('posts.store');
    Route::patch('/posts/{id}', [PostController::class , 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class , 'destroy'])->name('posts.destroy');
    // Comment Routes
    Route::get('/comments', [CommentController::class , 'index'])->name('comments.index');
    Route::get('/comments/{id}', [CommentController::class , 'show'])->name('comments.show');
    Route::post('/comments', [CommentController::class , 'store'])->name('comments.store');
    Route::patch('/comments/{id}', [CommentController::class , 'update'])->name('comments.update');
    Route::delete('/comments/{id}', [CommentController::class , 'destroy'])->name('comments.destroy');
});
