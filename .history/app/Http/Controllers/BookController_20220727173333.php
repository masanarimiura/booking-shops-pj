<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {   
        $this->validate($request, User::$rules);
        $form = $request->all();
        User::create($from);
        return redirect('/thanks');
    }
}
