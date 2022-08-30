<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $this->validate($request, Booking::$rules);
        $form = $request->all();
        Booking::create($from);
        return redirect('/my');
    }
}
