<?php

use app\models\comment;
use app\models\post;
use illuminate\foundation\testing\refreshdatabase;

pest()->use(refreshdatabase::class);

test('a post has many comments', function () {
    $post = post::factory()->hascomments(3)->create();

    expect($post->comments)->tohavecount(3)
        ->and($post->comments->first())->tobeinstanceof(comment::class);
});
