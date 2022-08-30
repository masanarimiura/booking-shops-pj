<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'tony',
            'age' => 35,
            'nationality' => 'American'
        ];
        DB::table('authors')->insert($param);
        $param = [
            'name' => 'jack',
            'age' => 20,
            'nationality' => 'British'
        ];
        DB::table('authors')->insert($param);
        $param = [
            'name' => 'sara',
            'age' => 45,
            'nationality' => 'Egyptian'
        ];
        DB::table('authors')->insert($param);
        $param = [
            'name' => 'saly',
            'age' => 31,
            'nationality' => 'Chinese'
        ];
        DB::table('authors')->insert($param);
    }
    }
