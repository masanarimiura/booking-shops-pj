<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(3)->create();
    }
}
