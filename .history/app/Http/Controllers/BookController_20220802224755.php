<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $this->validate($request, Booking::$rules);
        $user_id = Auth::id();
        $items = [
            'user_id' =>$user_id,
            'shop_id' =>$request->shop_id,
            'date' =>$request->date.$request->time,
            'number' => $request->last_name,
            ];
        $form = $items->all();
        Booking::create($from);
        return redirect('/thanks-book');
    }
}
