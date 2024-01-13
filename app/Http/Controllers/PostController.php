<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿作成
    public function create(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return response();
    }
    // 全件取得
    public function index()
    {
        return response()->json(Post::all());
    }
    // 投稿表示
    public function show(Post $post)
    {
        return response()->json($post);
    }
    // 投稿編集
    public function update(Request $request, Post $post) // Using Route Model Binding
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return response()->json($post);
    }
    // 投稿削除
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(Post::all());
    }
}
