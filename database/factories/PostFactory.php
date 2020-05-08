<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'image' => $faker->imageUrl($width = 640, $height = 480),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraphs($nb = 1, $asText = true),
        'user_id' => factory(\App\User::class),
        'subdiddit_id' => factory(\App\Subdiddit::class),
    ];
});
