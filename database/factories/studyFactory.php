<?php

use Faker\Generator as Faker;

$factory->define(App\study::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
        'user_id' => \App\user::all()->random()->id,
=======
        'student_id' => \App\user::all()->random()->id,
>>>>>>> 023ff1e21679d1c10c3ba02134287c7a0dd468c5
        'cycle_id' => \App\cycle::all()->random()->id,
        'deleted' => $faker->boolean,
    ];
});
