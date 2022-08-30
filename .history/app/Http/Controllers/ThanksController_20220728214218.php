<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function thanksRegister()
    {
        return view('thanks_register');
    }
    public function thanksBook()
    {
        return view('thanks_book');
    }
}
