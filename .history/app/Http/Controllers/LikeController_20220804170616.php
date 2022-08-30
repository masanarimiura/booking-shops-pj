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
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'datetime' =>$request->date.' '.$request->time,
            'number' => $request->number,
            ];
        create($request->all());
        return redirect('/');
    }

    public function dislike(Request $request)
    {
        $item = Like::where('id', $request->id)->delete();
        return redirect('/my_page');
    }
}
