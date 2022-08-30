<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Shop;
use App\Models\Like;

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
        $user_id = Auth::id();
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'datetime' =>$request->date.' '.$request->time,
            'number' => $request->number,
        ];
        $this->validate($request, Booking::$rules);
        Booking::create($items);
        return redirect('/thanks-book');
    }
}
