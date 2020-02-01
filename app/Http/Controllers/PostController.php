<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        // $comments = Comment::forPost($post)->get()->threaded();
        $comments = $post->getComments();
        // Avoid n+1 problem.
        $post->load('comments.owner');
        // $comments = $post->comments->groupBy('parent_id');
        // $comments['root'] = $comments[''];
        // unset($comments['']);
        
        return view('posts.show', compact('post', 'comments'));
    }
}
