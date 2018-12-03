<?php

use Faker\Generator as Faker;

$factory->define(App\Bankgenerate::class, function (Faker $faker) {
    return [
        
        'amount' => $faker->numberBetween(100,10000), 

        'merchant_id' => $faker->numberBetween(1,100), 

        'reference' => $faker->numberBetween(10,50), 

        'transaction_status' => $faker->numberBetween(0,1)
    ];
});
