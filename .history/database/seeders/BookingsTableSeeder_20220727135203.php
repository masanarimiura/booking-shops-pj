<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(20)->create();
    }
}
