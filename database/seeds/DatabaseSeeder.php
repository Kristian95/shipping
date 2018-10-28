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
        $this->call(SendersTableSeeder::class);
        $this->call(RecipientsTableSeeder::class);
        $this->call(ShippingMethodsTableSeeder::class);
        $this->call(ShippingPricesTableSeeder::class);
    }
}
