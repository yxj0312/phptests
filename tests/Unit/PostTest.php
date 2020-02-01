<?php

namespace Tests\Unit;

use App\Comment;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    function a_post_has_many_comments()
    {
        $post = $this->create(Post::class);
        $this->create(Comment::class, ['post_id' => $post->id]);
        
        $this->assertInstanceOf(Comment::class, $post->comments->first());
    }
}
