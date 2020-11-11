<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'firstname'=> $faker->firstName,
        'phone'=>$faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at'=> $faker->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'type'=> al|tut_e|tut_c,
        'enterprise_id'=>\App\enterprise::all()->random()->id,
        'cycle_id'=>\App\cycle::all()->random()->id,
        'remember_token' => str_random(10),
        'deleted' => $faker->boolean,
    ];
});
