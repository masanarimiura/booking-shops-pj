<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        Shop::create([
            'name' => 'required|max:100',
        'area' => 'required|max:100',
        'genre' => 'required|max:100',
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
