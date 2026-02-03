<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->latest()->get();

        return view('home', ['posts' => $posts]);
    }

    public function view(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.view', ['post' => $post->load('comments')]);
    }
}
