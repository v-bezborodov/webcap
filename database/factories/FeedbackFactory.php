<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::first()->id,
        'body' => $faker->paragraph(),
        'stars' => $faker->numberBetween(0, 5),
        'file' => 'no-image.jpg',
    ];
});
