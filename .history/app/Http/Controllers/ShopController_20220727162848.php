<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show(Request $request)
    {
        $item = Shop::where('id',$request->id)->first();
        if ($item) {
            return  view('confirm',$items);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
    
}
