<?php

use Illuminate\Database\Seeder;
use App\Exceptions\AlreadySeededException;
use App\ShippingMethod;

class ShippingMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ShippingMethod::count() > 0) {
            throw new AlreadySeededException('ShippingMethod table already seeded');
        }

        $data = [
            ['name' => 'ShippingMethod 1'],
            ['name' => 'ShippingMethod 2'],
            ['name' => 'ShippingMethod 3']
        ];

        ShippingMethod::insert($data);
        
        $shippingMethodOne = ShippingMethod::where('name', 'ShippingMethod 1')->first();
        $shippingMethodOne->recipients()->sync([1, 2]);
        $shippingMethodOne->senders()->sync([1, 2]);

        $shippingMethodTwo = ShippingMethod::where('name', 'ShippingMethod 2')->first();
        $shippingMethodTwo->recipients()->sync([2, 3]);
        $shippingMethodTwo->senders()->sync([1, 3]);
    }
}
