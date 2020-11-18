<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tracing_id' =>\App\Tracing::all()->random()->id,
        'enterprise_id' =>\App\enterprise::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->randomDigit,
        'accepted' => $faker->boolean = false,
        'deleted' => $faker->boolean = false,
    ];
});
