<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {   
        $this->validate($request, User::$rules);
        $form = $request->all();
        User::create($from);
        return redirect('/thanks');
    }
}
