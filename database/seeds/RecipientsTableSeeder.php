<?php

use Illuminate\Database\Seeder;
use App\Exceptions\AlreadySeededException;
use App\Recipient;

class RecipientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Recipient::count() > 0) {
            throw new AlreadySeededException('Recipient table already seeded');
        }

        $data = [
            ['name' => 'Recipient 1'],
            ['name' => 'Recipient 2'],
            ['name' => 'Recipient 3'],
        ];

        Recipient::insert($data);
    }
}