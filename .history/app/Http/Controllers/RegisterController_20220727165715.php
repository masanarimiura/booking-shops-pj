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
        $validate_rule = [
            'last_name' => 'required|max:100',
            'first_name' => 'required|max:100',
            'gender' => 'required',
            'email' => 'required|unique:contacts|email',
            'postcode' => 'required|max:8',
            'address' => 'required|max:255',
            'building_name' => 'max:255',
            'opinion' => 'required|max:120',
        ];
        $this->validate($request, $validate_rule);
        User::create($request);
        return redirect('/thanks');
    }
}
