<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostShowTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_can_show_post()
    {
        $post = $this->create(Post::class);

        $this->get(route('posts.show', ['post' => $post]))->assertStatus(200)->assertsee($post->title);
    }
}
