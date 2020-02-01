<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store()
    {
        dd(Auth::id());
        Comment::create([
            'body' => request('body'),
            'user_id' => Auth::id()
        ]);
    }
}
