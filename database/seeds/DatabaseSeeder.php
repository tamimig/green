<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\Bank::class, 10)->create(); 

        factory(App\Bankgenerate::class, 10)->create(); 

        factory(App\Card::class,10)->create(); 

        factory(App\Cardgenerate::class, 10)->create(); 

        factory(App\Paymentmethod::class, 5)->create(); 
    }
}
