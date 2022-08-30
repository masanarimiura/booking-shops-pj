<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index()
    {
        $items = Shop::all();
        return view('index', ['items' => $items]);
    }
}
