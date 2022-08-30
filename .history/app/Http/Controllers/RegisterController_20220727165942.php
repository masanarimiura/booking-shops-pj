<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {   
        $this->validate($request, ::$rules);
        User::create($request);
        return redirect('/thanks');
    }
}
