<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }

    public function view(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.view', ['post' => $post]);
    }
}
