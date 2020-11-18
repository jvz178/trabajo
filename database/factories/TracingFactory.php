<?php

use Faker\Generator as Faker;

$factory->define(App\tracing::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
        'reason' => $faker->sentence,
        'observation' => $faker->sentence,
        'tutor_c_id' => App\user::all()->random()->id,
        'deleted' => $faker->boolean,
    ];
});
