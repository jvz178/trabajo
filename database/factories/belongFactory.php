<?php

use Faker\Generator as Faker;

$factory->define(App\belong::class, function (Faker $faker) {
    return [
        'student_id'=> \app\user::all()->random()->id,
        'enterprice_id' => \app\enterprice::all()->random()->id,
        'email'=> $faker->email,
        'deleted' => $faker->boolean
    ];
});
