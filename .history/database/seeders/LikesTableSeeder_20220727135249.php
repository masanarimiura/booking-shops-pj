<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class LikesTableSeeder extends Seeder
{
    public function run()
    {
        Booking::factory()->count(20)->create();
    }
}
