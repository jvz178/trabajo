<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'id' => \App\visit::all()->random()->id,
        'tutor_c_id' =>\App\visit::all()->random()->id,
        'enterprise_id' =>\App\visit::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->number_format,
        'accepted' => $faker-> boolean,
        'deleted' => $faker-> boolean
    ];
});
