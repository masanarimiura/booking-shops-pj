<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => 'required|max:256',
        ]);

        Shop::create([
            'name' => 'ぶどう',
            'color' => '紫',
            'price' => '300',
        ]);

        Shop::create([
            'name' => 'みかん',
            'color' => '黄',
            'price' => '110',
        ]);
    }
}
