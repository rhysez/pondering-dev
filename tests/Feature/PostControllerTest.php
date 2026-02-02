<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('can retrieve a list of posts', function () {
    $response = $this->get('/posts');
    $response->assertStatus(200);
    $response->assertViewIs('posts.index');
});
