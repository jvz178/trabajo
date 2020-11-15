<?php

use Faker\Generator as Faker;

$factory->define(App\study::class, function (Faker $faker) {
    return [
        'user_id' => \App\user::all()->random()->id,
        'cycle_id' => \App\cycle::all()->random()->id,
        'deleted' => $faker->boolean,
    ];
});
