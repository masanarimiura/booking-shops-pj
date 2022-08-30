<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function destroyBooking(Request $request)
    {
        $booking_id = $request->booking_id;
        $item = Booking::where('id', $booking_id)->delete();
        return redirect('/my-page');
    }
}
