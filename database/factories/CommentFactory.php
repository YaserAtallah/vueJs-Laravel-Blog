<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(rand(10, 30)),
        'user_id' => rand(1,10),
        'post_id' => rand(1,10)
    ];
});
