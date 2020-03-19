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

    public function addPost() {
        return view('addPost');
    }
}
