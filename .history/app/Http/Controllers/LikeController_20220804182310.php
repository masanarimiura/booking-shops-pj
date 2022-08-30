<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\User;
use App\Models\Shop;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $user_id = Auth::id();
        $shop_id = $request->shop_id;
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$shop_id,
            ];
        Like::create($items);
        return redirect('/');
    }

    public function dislike(Request $request)
    {
        $user_id
        $item = Like::where('user_id', $request->id)->('id', $request->id)->delete();
        return redirect('/');
    }
}
