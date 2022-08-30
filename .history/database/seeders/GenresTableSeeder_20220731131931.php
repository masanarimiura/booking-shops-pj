<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    public function run()
    {
        Genre::create([
            'name' => '仙人',
            'area' => '東京都',
            'genre' => '寿司',
            'comment' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
            'image'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ]);
    }
}
