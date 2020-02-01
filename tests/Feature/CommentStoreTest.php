<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentStoreTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    function guest_may_not_create_comments()
    {
        $this->withoutExceptionHandling();
        $post = $this->create(Post::class, ['user_id' => 1]);
        $this->post(route('comments.store', ['post' => $post]))->assertStatus(302);
    }
}
