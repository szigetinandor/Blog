<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function all() {
        return Post::all();
    }

    public function getOne(Post $post) {
        return $post;
    }

    public function add(Request $request) {
       $post = Post::create($request->all());
       return response()->json($post, 201);
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function delete(Post $post) {
        $post->delete();
        return response()->json(null, 204);
    }
}
