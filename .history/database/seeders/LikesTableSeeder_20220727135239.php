<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    public function run()
    {
        Booking::factory()->count(20)->create();
    }
}
