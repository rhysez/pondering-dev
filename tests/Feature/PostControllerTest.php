<?php

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('can retrieve a list of posts', function () {
    $title = 'Test title';
    Post::factory()->create(['title' => $title]);

    $response = $this->get('/posts');

    $response->assertStatus(200);
    $response->assertViewIs('posts.index');
    $response->assertSee($title);
});
