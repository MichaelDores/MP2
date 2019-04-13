<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'Model' => $faker->randomElement($array = array ('LX','XL','CRV')),
        'Year' => $faker->year($max = 'now'),
    ];
});
