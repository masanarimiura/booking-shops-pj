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
            'area' => '東京都',
            'genre' => '寿司',
            'comment' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
        ]);
        Shop::create([
            'name' => '牛助',
            'area' => '大阪府',
            'genre' => '焼き肉',
            'comment' => '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。',
        ]);
        Shop::create([
            'name' => '戦慄',
            'area' => '福岡県',
            'genre' => '居酒屋',
            'comment' => '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。',
        ]);
        Shop::create([
            'name' => 'ルーク',
            'area' => '東京都',
            'genre' => 'イタリアン',
            'comment' => '都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。',
        ]);
        Shop::create([
            'name' => '志摩屋',
            'area' => '福岡県',
            'genre' => 'ラーメン',
            'comment' => 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。',
        ]);
        Shop::create([
            'name' => '香',
            'area' => '東京都',
            'genre' => '焼き肉',
            'comment' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
        ]);
        Shop::create([
            'name' => 'JJ',
            'area' => '大阪府',
            'genre' => '居酒屋',
            'comment' => 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => 'ラーメン極み',
            'area' => '東京都',
            'genre' => 'ラーメン',
            'comment' => '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。',
        ]);
        Shop::create([
            'name' => '鳥雨',
            'area' => '大阪府',
            'genre' => '居酒屋',
            'comment' => '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。',
        ]);
        Shop::create([
            'name' => '築地色合',
            'area' => '東京都',
            'genre' => '寿司',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
        Shop::create([
            'name' => '',
            'area' => '',
            'genre' => '',
            'comment' => '',
        ]);
    }
}
