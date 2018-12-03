<?php

use Faker\Generator as Faker;


$factory->define(App\Bank::class, function (Faker $faker) {
    return [
        'name' => $faker->name,

        'account_number' => $faker->numberBetween(1,60),
        
        'bank_name' => $faker->word
    ];
});
