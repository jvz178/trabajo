<?php

use Faker\Generator as Faker;

$factory->define(App\assistance::class, function (Faker $faker) {
    return [
        'student_id'=> \app\user::all()->random()->id,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'assistance'=> $faker->sentence,
        'accepted' => $faker->boolean = false,
        'deleted' => $faker->boolean = false
    ];
});
