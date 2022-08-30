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
        User::create($form);
        return redirect('thanks');
    }
}
