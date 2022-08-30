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

    public function search(Request $request)
    {
        $area_id = $request->area_id;
        $shop_id = $request->shop_id;
        $search_text = $request->search_text;

        if(empty($area_id) && empty($email) && empty($from_date)&& empty($until_date) && $gender == '全て'){
            // 何も入力なしの場合
            return redirect('manage');
        } else if($gender == '全て'){




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
