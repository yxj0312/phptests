<?php

namespace Tests\Unit;

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
        dd($post);
    }
}
