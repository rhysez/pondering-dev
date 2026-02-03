<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('a comment belongs to a post', function () {
    $comment = Comment::factory()->create();

    expect($comment->post)->toBeInstanceOf(Post::class)
        ->and($comment->post_id)->toBe($comment->post->id);
});

