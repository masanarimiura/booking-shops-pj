<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ShopsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
    }
}
