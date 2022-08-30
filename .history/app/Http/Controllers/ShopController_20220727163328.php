<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $items = Shop::all();
        return view('index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $item = Shop::where('id',$request->id)->first();
        if ($item) {
            return view('shop',$items);
        } else {
            
            return view('shop',$items);
        }
    }
    
}
