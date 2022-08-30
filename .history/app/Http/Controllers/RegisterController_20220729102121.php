<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {   
        $this->validate($request, User::$rules);
        $form = $request->all();
        User::create($from);
        return redirect('/thanks');
    }
}
