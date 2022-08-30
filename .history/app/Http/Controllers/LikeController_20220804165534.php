<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function destroyLike(Like $like)
    {
        $user_id = Auth::id();
        $users = User::where('id',$user_id)
        ->with('shop')
        ->get();
        return view('my_page',['users' => $users]);
        
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
