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
        $user_bookings = User::where('id',$user_id)
        ->with('shops','likes')
        ->get();
        $user_likes = User::where('id',$user_id)
        ->with('likes')
        ->get();
        return view('my_page',['users' => [$user_bookings ,$userlikes]]);
    }

    public function destroyLike(Like $like)
    {
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
