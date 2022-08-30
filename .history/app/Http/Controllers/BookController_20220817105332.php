<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
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

    public function destroyBooking(Booking $booking)
    {
        $booking_id = $booking ->booking_id
        $item = Booking::where('id', $booking->id)->delete();
        return redirect('/my_page');
    }

}
