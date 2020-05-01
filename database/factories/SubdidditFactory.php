<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subdiddit;
use Faker\Generator as Faker;

$factory->define(Subdiddit::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraphs($nb = 3, $asText = true),
        'user_id' => factory(\App\User::class)
    ];
});
