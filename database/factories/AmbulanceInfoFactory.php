<?php

use Faker\Generator as Faker;


$factory->define(App\Models\AmbulanceInfo::class,function (Faker $faker) {

    return [
        'email' => $faker->unique()->safeEmail,
        'drivername' => $faker->name,
        'ownername' => $faker->name,
        'drivermobile' => '0171020020',
        'ownermobile' => '0171010101',
        'drivernid' => '1995102434343',
        'ambulancename' => $faker->name,
        'location' => 'Dhaka',
        'hospital' => 'Ibnasina',
        'acstatus' =>random_int(0,1),
        'numberplate' => 'Dhaka L - 1234',
        'type' =>'ICU',
    ];
});