<?php

namespace Tests\Feature;

use App\Comment;
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
        $post = $this->create(Post::class, ['user_id' => 1]);
        $this->post(route('comments.store', ['post' => $post]))->assertStatus(302);
    }

    /** @test */
    function user_can_create_comments()
    {
        $user = $this->signInUser();
        $post = $this->create(Post::class, ['user_id' => $user->id]);
        // dd($post->id);
        $this->post(route('comments.store', ['post' => $post]), [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'body' => 'First comment'
        ]);
        // ->assertStatus(200)
        // ->assertSee('First comment');
        dd(Comment::find(1));
    }
}
