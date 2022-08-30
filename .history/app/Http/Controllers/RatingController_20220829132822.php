<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate($request, Rating::$rules);
        $user_id = Auth::id();
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'rating' =>$request->rating,
            'comment' => $request->comment,
            ];
            
        Rating::create($items);
        return redirect('/thanks-rating');
    }
}
