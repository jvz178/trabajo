<?php

use Faker\Generator as Faker;

$factory->define(App\worksheet::class, function (Faker $faker) {
    return [
        'date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->paragraph,
<<<<<<< HEAD
        'student_id' => \App\student::all()->random()->id,
=======
        'student_id' => \App\user::all()->random()->id,
>>>>>>> 023ff1e21679d1c10c3ba02134287c7a0dd468c5
        'accepted' => $faker->boolean,
        'deleted' => $faker->boolean,
    ];
});
