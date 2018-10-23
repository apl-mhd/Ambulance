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
//'email' => $faker->unique()->safeEmail,

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email' => 'apl.mhd@gmail.com',
        'password' => bcrypt('1234'), // secret
        'remember_token' => str_random(10),
    ];
});
