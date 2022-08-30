<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $items = User::where('id',$user_id)->with('bookings','likes','shops);
        return view('my_page');
        // $itemを第2引数に入れる
    }

    public function destroyBooking(Booking $booking)
    {
        $item = Booking::where('id', $booking->id)->delete();
        return redirect('/my_page');
    }
    public function destroyLike(Like $like)
    {
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
