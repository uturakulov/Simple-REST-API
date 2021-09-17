<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest();

        if ($request->title) {
            $posts->where('title', $request->title);
        }

        if ($request->text) {
            $posts->where('text', $request->text);
        }

        if ($request->author) {
            $posts->where('author', $request->author);
        }

        if ($request->likes) {
            $posts->where('likes', $request->likes);
        }

        if ($request->created_at) {
            $posts->where('created_at', $request->created_at);
        }

        return $posts->get();
    }

    public function show($id)
    {
        return Post::where('id', $id)->get();
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());

        return response(200);
    }

    public function update(PostRequest $request, $id)
    {
        Post::where('id', $id)->update($request->validated());

        return response(200);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response(200);
    }
}
