<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

class RatingController extends Controller

{
    public function index(Request $request)
    {
        $shop = [
            'id' => $request->shop_id,
            'name = $request->shop_name,
            $booking_datetime = $request->shop_booking_datetime,
            $booking_number = $request->shop_booking_number,
            ];
        return view('rating',['shop' => $shop ]);
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
