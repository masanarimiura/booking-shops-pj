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

        if(empty($area_id) && empty($shop_id) && empty($search_text)){
            // 何も入力なしの場合
            return redirect('/');
        } else if(){
            
        }
         else if(!empty($area_id)){
            // area_id が入力された場合
            if(empty($shop_id) && empty($search_text)){
                // 他の入力なしの場合
            }
            if(!empty($shop_id) && empty($search_text)){
                // shop_id が入力された場合
            }
            if(empty($shop_id) && !empty($search_text)){
                // search_text が入力された場合
            }
        }
        



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
