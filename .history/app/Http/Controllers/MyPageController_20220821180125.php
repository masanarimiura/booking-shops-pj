<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DateTimeRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;
use App\Models\Like;

class MyPageController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $user_name = Auth::name();
        $user_bookings = Booking::where('user_id',$user_id)
        ->with('shop')
        ->get();
        $user_likes = Like::where('user_id',$user_id)
        ->with('shop')
        ->get();
        return view('my_page',['user_bookings' => $user_bookings ,'user_likes' => $user_likes ,'user_name']);
    }

    public function editBooking(DateTimeRequest $request)
    {
        $user_id = Auth::id();
        $booking_id = $request->booking_id;
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'datetime' =>$request->date.' '.$request->time,
            'number' => $request->number,
            ];
        $item = Booking::where('id', $booking_id)->update($items);
        return redirect('/thanks-book-edit');
    }

    public function destroyBooking(Request $request)
    {
        $booking_id = $request->booking_id;
        $item = Booking::where('id', $booking_id)->delete();
        return redirect('/thanks-book-destroy');
    }

    public function dislike(Request $request)
    {
        $user_id = Auth::id();
        $shop_id = $request->shop_id;
        $item = Like::where('user_id', $user_id)
        ->where('shop_id', $shop_id)
        ->delete();
        return redirect('/my-page');
    }
}
