<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'post_id' => factory(Post::class)->create()->id,
        'body' => $faker->text
    ];
});
