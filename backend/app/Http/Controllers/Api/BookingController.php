<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Book;
class BookingController extends Controller
{

//schedule a photoshoot
    public function booking(Request $request)
    {         
        $booking = Book::create([
        'user_id' => Auth::id(),
        'is_cancel'=>false, 
        'start_date' =>Carbon::parse($request->start_date)->format('d-m-Y'),
        'hours' =>Carbon::parse($request->hour)->format('H:i:s'),
        'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        return response()->json(['data'=>$booking]);


        
    }
}
