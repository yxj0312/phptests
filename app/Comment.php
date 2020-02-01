<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeForPost($query, Post $post)
    {
        return $query->with('owner')->where('post_id', $post->id);
    }

    // $post->comments[0]->replies -> n+1 problem -> should use eager loading to avoid it.
    
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }
}
