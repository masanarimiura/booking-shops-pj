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
        $users = User::where('id',$user_id)
        ->first()
        ->with('bookings','likes')
        ->;
        return view('my_page',['users' => $users]);
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
