<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getComments()
    {
        return $this->comments()->with('owner')->get()->threaded();
    }

    public function addComment($attributes)
    {
        $comment = (new Comment)->fill($attributes);

        $comment->user_id = auth()->id();

        $comment->post_id = $this->id;

        return $comment->save();
    }
}
