<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function store(Request $request)
    {   
        $this->validate($request, User::register$rules);
        $form = $request->all();
        User::create($from);
        return redirect('/thanks');
    }
}