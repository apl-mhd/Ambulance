<?php

use Faker\Generator as Faker;


$factory->define(App\Models\AmbulanceInfo::class,function (Faker $faker) {

    return [
        'email' => $faker->unique()->safeEmail,
        'drivername' => $faker->name,
        'ownername' => $faker->name,
        'drivermobile' =>'017'.rand(0,9).rand(0,9).mt_rand(000000,999999),
        'ownermobile' => '017'.rand(0,9).rand(0,9).mt_rand(000000,999999),
        'drivernid' => mt_rand(19680000000000,19689999999999),
        'ambulancename' => $faker->name,
        'location' => 'Dhaka',
        'hospital' => 'Ibnasina',
        'acstatus' =>random_int(0,1),
        'numberplate' => 'Dhaka L - 1234',
        'type' =>'ICU',
        'imglink' => $faker->imageUrl(),
    ];
});