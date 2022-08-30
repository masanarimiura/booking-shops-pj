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

    public function thanksBookEdit()
    {
        return view('thanks_book_edit');
    }

    public function thanksBookDestroy()
    {
        return view('thanks_book_destroy');
    }

    public function thanksRating()
    {
        return view('thanks_rating');
    }
}
