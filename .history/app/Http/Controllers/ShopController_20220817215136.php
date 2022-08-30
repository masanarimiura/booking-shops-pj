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

    public function store(Request $request)
    {   
        $this->validate($request, Booking::$rules);
        $user_id = Auth::id();
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'datetime' =>$request->date.' '.$request->time,
            'number' => $request->number,
            ];
        Booking::create($items);
        return redirect('/thanks-book');
    }
}
