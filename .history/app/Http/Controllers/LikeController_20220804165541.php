<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function destroyLike(Like $like)
    {
        
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
