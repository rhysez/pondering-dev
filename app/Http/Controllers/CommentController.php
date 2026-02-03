<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $post->comments()->create([
            'body' => $request->body,
            'post_id' => $post->id
        ]);

        return view('posts.view', ['post' => $post]);
    }
}
