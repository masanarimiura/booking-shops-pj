<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\User;
use App\Models\User;

class LikeController extends Controller
{
    public function like(Like $like)
    {
        $item = Like::where('id', $like->id)->delete();
        return redirect('/my_page');
    }
}
