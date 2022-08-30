<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $items = [
            'shop_id' =>$request->shop_id,
            'date' =>$request->date.$,
            'number' => $request->last_name,
            ];
        $this->validate($request, Booking::$rules);
        $form = $request->all();
        Booking::create($from);
        return redirect('/thanks-book');
    }
}
