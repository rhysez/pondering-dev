<?php

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('can retrieve a list of posts', function () {
    $title = 'Test title';
    Post::factory()->create(['title' => $title]);
    Post::factory()->count(4)->create();

    $response = $this->get('/posts');

    $response->assertStatus(200);
    $response->assertViewIs('posts.index');
    $response->assertSee($title);

    $this->assertDatabaseCount('posts', 5);
});

test('can see the correct message if there are no posts', function () {
    $response = $this->get('/posts');

    $response->assertStatus(200);
    $response->assertViewIs('posts.index');
    $response->assertSee('Nothing here yet!');
});
