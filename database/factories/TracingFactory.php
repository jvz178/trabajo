<?php

use Faker\Generator as Faker;

$factory->define(App\Tracing::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
        'reason' => $faker->paragraph,
        'observation' => $faker->paragraph,
        'tutor_c_id' => App\user::all()->random()->id,
        'deleted' => $faker->boolean,
    ];
});
