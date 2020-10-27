<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigitNotNull,
        'tutor_c_id' =>$faker->randomDigitNotNull,
        'enterprise_id' =>$faker->randomDigitNotNull,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->number_format,
        'accepted' => $faker-> boolean,
        'deleted' => $faker-> boolean

        //Hola 
    ];
});
