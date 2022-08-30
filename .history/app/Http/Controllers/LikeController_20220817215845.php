<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

use App\Models\Shop;

class LikeController extends Controller
{
    
    public function dislikeMyPage(Request $request)
    {
        $user_id = Auth::id();
        $shop_id = $request->shop_id;
        $item = Like::where('user_id', $user_id)
        ->where('shop_id', $shop_id)
        ->delete();
        return redirect('/my-page');
    }
}
