<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }

    public function search()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }

    public function show(Request $request)
    {
        $item = Shop::where('id',$request->id)->first();
        if ($item) {
            return view('shop',$items);
        } else {
            $message = [
                'message' => 'お店の詳しい情報が見つかりませんでした'
            ];
            return view('shop',$message);
        }
    }
}
