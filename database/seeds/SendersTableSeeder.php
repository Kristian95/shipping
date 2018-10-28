<?php

use Illuminate\Database\Seeder;
use App\Exceptions\AlreadySeededException;
use App\Sender;

class SendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Sender::count() > 0) {
            throw new AlreadySeededException('Sender table already seeded');
        }

        $data = [
            ['name' => 'Sender 1'],
            ['name' => 'Sender 2'],
            ['name' => 'Sender 3']
        ];

        Sender::insert($data);
    }
}