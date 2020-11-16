<?php

use Faker\Generator as Faker;

$factory->define(App\ce::class, function (Faker $faker) {
    return [
        'word' => $faker->name,
        'description' => $faker->paragraph,
        'ra_id' => \App\ra::all()->random()->id,
        'task_id' => \App\task::all()->random()->id,
        'mark' => $faker->integer,
        'deleted' => $faker->boolean = false,
    ];
});
