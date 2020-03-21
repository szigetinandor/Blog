<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function posts() {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function addPostPage() {
        return view('postForm', ['action' => route('addPost')]);
    }

    public function addPost(Request $request) {
        Post::create($request->all());
        return redirect()->route('posts');
    }

    public function updatePostPage($id) {
        $post = Post::find($id);
        return view('postForm', ['action' => route('updatePost', $id), 'post' => $post]);
    }

    public function updatePost($id, Request $request) {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->post = $request->post;
        $post->author = $request->author;
        $post->save();
        return redirect()->route('posts');
    }
}
