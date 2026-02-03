<?php

use App\Models\Post;

test('it can store a comment for a post', function () {
    $post = Post::factory()->create();
    $payload = ['body' => 'This is a test comment through a UUID route.'];

    $response = $this->post(route('comments.store', $post), $payload);

    $response->assertStatus(200);

    $this->assertDatabaseHas('comments', [
        'post_id' => $post->id,
        'body' => $payload['body'],
    ]);
});

test('it validates the comment body', function () {
    $post = Post::factory()->create();

    $this->post(route('comments.store', $post), ['body' => ''])
        ->assertSessionHasErrors('body');
});
