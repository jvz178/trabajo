<?php

use Faker\Generator as Faker;

$factory->define(App\task_done::class, function (Faker $faker) {
    return [
        'user_id' => \App\user::all()->random()->id,
        'task_id' => \App\task::all()->random()->id,
        'mark' => $faker->integer,
        'deleted' => $faker->boolean,
    ];
});
