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
        $genre_id = $request->genre_id;
        $search_text = $request->search_text;

        if(empty($area_id) && empty($genre_id) && empty($search_text)){
            // 何も入力なしの場合
            return redirect('/');
        } else {
            if(!empty($area_id) && !empty($genre_id) && !empty($search_text)){
                // 全て入力された場合
                $shops = Shop::where('name','LIKE',"%{$search_text}%")
                ->where('area_id','LIKE',"%{$area_id}%")
                ->where('genre_id','LIKE',"%{$genre_id}%")
                ->get();
            } else if(!empty($area_id)){
                // area_id が入力された場合で
                if(empty($genre_id) && empty($search_text)){
                    // 他の入力なしの場合
                    $shops = Shop::where('name','LIKE',"%{$search_text}%")
                        ->where('area_id','LIKE',"%{$area_id}%")
                        ->get();
                }
                if(!empty($genre_id) && empty($search_text)){
                    // genre_id が入力された場合
                }
                if(empty($genre_id) && !empty($search_text)){
                    // search_text が入力された場合
                }
            } else if(!empty($genre_id)){
                // genre_id が入力された場合
                if(empty($area_id) && empty($search_text)){
                    // 他の入力なしの場合
                }
                if(empty($genre_id) && !empty($search_text)){
                    // search_text が入力された場合
                }
            } else if(!empty($search_text)){
                // search_text が入力された場合
                if(empty($area_id) && empty($genre_id)){
                    // 他の入力なしの場合
                }
            }
            return view('index', ['shops' => $shops]);
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
