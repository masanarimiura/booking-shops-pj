<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        Shop::create([
            'name' => 'リンゴ',
            'color' => '赤',
            'price' => '100',
        ]);

        Fruit::create([
            'name' => 'ぶどう',
            'color' => '紫',
            'price' => '300',
        ]);

        Fruit::create([
            'name' => 'みかん',
            'color' => '黄',
            'price' => '110',
        ]);
    }
}
