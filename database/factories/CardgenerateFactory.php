<?php

use Faker\Generator as Faker;

$factory->define(App\Cardgenerate::class, function (Faker $faker) {
    return [
         'amount' => $faker->numberBetween(100,10000), 

        'merchant_id' => $faker->randomDigit, 

        'reference' => $faker->randomDigit, 

        'transaction_status' => $faker->numberBetween(0,1)
    ];
});
