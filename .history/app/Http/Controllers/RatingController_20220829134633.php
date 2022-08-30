<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

class RatingController extends Controller

{
    public function index(Request $request)
    {
        $shop_id = $request->shop_id;
        $shop_name = $request->shop_name;
        $shop_booking_datetime = $request->shop_booking_datetime;
        $shop_id = $request->shop_id;
        return view('rating',[]);
    }

    public function store(Request $request)
    {
        $this->validate($request, Rating::$rules);
        $user_id = Auth::id();
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'rating' =>$request->rating,
            'comment' => $request->comment,
            ];
            
        Rating::create($items);
        return redirect('/thanks-rating');
    }
}
