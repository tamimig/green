<?php

use Faker\Generator as Faker;

$factory->define(App\Paymentmethod::class, function (Faker $faker) {
    return [
        
        'credit_card' => $faker->word, 

        'bank' => $faker->word
    ];
});
