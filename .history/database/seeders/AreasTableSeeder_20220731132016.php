<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    public function run()
    {
        Genre::create([
            'name' => '都道府県',
        ]);
    }
}
