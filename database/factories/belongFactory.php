<?php

use Faker\Generator as Faker;

$factory->define(App\belong::class, function (Faker $faker) {
    return [
        'student_id'=> \app\user::all()->random()->id,
        'enterprice_id' => \app\enterprise::all()->random()->id,
        'email'=> $faker->safeEmail,
        'deleted' => $faker->boolean
    ];
});
