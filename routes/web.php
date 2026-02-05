<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{slug}', [PostController::class, 'view'])->name('posts.view');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
