<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {

        if (　Auth::check()　) {
        // ログイン済みのときの処理
        return view('モデル名.logged');
        } else {
        // ログインしていないときの処理
        return view('モデル名.notlogged');
        }
        $items = Shop::all();
        return view('index', ['items' => $items]);
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
