<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $id = Auth::id();
        $items = [
            'user_id' =>
            'shop_id' =>$request->shop_id,
            'date' =>$request->date.$request->time,
            'number' => $request->last_name,
            ];
        $this->validate($items, Booking::$rules);
        $form = $items->all();
        Booking::create($from);
        return redirect('/thanks-book');
    }
}
