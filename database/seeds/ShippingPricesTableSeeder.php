<?php

use Illuminate\Database\Seeder;
use App\Exceptions\AlreadySeededException;
use App\ShippingPrice;
use App\ShippingMethod;

class ShippingPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ShippingPrice::count() > 0) {
            throw new AlreadySeededException('ShippingPrice table already seeded');
        }

        $firstMethodId = ShippingMethod::where('name', 'ShippingMethod 1')->first()->id;
        $secondMethodId = ShippingMethod::where('name', 'ShippingMethod 2')->first()->id;
        $thirdMethodId = ShippingMethod::where('name', 'ShippingMethod 3')->first()->id;

        ShippingPrice::create([
            'shipping_method_id' => $firstMethodId,
            'price' => 1.3,
            'weight_from' => 10,
            'weight_to' => 20
        ]);

        ShippingPrice::create([
            'shipping_method_id' => $secondMethodId,
            'price' => 1.3,
            'weight_from' => 100,
            'weight_to' => 200
        ]);


        ShippingPrice::create([
            'shipping_method_id' => $thirdMethodId,
            'price' => 1.3,
            'weight_from' => 500,
            'weight_to' => 700
        ]);
    }
}
