<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([], function () {
    // 投稿一覧表示
    Route::get('/posts', [PostController::class, 'index']);
    // 投稿表示
    Route::get('/posts/{id}', [PostController::class, 'show']);
    // 投稿作成
    Route::post('/posts/create', [PostController::class, 'create']);
    // 投稿編集
    Route::patch('/posts/update/{id}', [PostController::class, 'update']);
    // 投稿削除
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);
});
