<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        Booking::factory()->count(20)->create();
    }
}
