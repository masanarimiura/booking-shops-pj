<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;
use App\Models\Like;

class MyPageController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $user_bookings = Booking::where('user_id',$user_id)
        ->with('shop')
        ->get();
        $user_likes = Like::where('user_id',$user_id)
        ->with('shop')
        ->get();
        return view('my_page',['user_bookings' => $user_bookings ,'user_likes' => $user_likes]);
    }

    public function destroyLike(Like $like)
    {
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
