<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\BookingRequest;

use Auth;

use App\Booking;

class BookingController extends Controller
{

//schedule a photoshoot
    public function booking(BookingRequest $request)
    {   
        $booking= new Booking;
        $booking->fill($request->all());

        return response()->json($booking);

    }
}
