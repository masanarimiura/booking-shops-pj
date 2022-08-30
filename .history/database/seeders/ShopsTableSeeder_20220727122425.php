<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        Shop::create([
            'name' => '仙人',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
    }
}
