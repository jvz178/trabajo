<?php

use Faker\Generator as Faker;

$factory->define(App\assitance::class, function (Faker $faker) {
    return [
        'student_id'=> \app\user::all()->random()->id,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'assistance'=> $faker->sentence,
        'deleted' => $faker->boolean
    ];
});
