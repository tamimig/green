<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
         'card_holder_name' => $faker->name, 

        'card_number' => $faker->numberBetween(100,500), 

        'expiry_month' => $faker->monthName($max = 'now'), 

        'expiry_year' => $faker->year($max = 'now'), 

        'cvv' => $faker->numberBetween(100,150)
    ];
});
