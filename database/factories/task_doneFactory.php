<?php

use Faker\Generator as Faker;

$factory->define(App\task_done::class, function (Faker $faker) {
    return [
        'student_id' => \App\user::all()->random()->id,
        'task_id' => \App\task::all()->random()->id,
        'mark' => $faker->randomDigit,
        'deleted' => $faker->boolean = false,
    ];
});
