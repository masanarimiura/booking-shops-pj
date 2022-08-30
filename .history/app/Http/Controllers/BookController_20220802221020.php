<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $items = [
            '' =>$request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
            ];
        $this->validate($request, Booking::$rules);
        $form = $request->all();
        Booking::create($from);
        return redirect('/thanks-book');
    }
}
