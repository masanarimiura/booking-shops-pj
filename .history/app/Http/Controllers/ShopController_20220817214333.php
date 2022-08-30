<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    

    public function show(Request $request)
    {
        $shop_id = $request->shop_id;
        $shop = Shop::where('id','=',$shop_id)->first();
        return view('shop',['shop' => $shop]);
    }
}
