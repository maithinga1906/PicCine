<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Booking;
use App\DetailBooking;
class BookingController extends Controller
{

//schedule a photoshoot
    public function booking(Request $request)
    {   
        $booking= new Booking;
        // $booking->fill($request->all());
        $booking->id_user=$request->id_user;
        $booking->id_photographer=$request->id_photographer;
        $booking->id_combo=$request->id_combo;
        $booking->is_cancel=$request->is_cancel;
        $booking->save();
        

        $detailBooking= new DetailBooking;
        $detailBooking->id_booking=$request->id_booking;
        $detailBooking->address= $request->address;
        $detailBooking->user_phone=$request->user_phone;
        $detailBooking->photographer_phone=$request->photographer_phone;
        $detailBooking->user_name=$request->user_name;
        $detailBooking->photographer_name=$request->photographer_name;
        $detailBooking->code_voucher=$request->code_voucher;
        $detailBooking->name_style=$request->name_style;
        $detailBooking->save();

        //  khong the tra ve $booking va detailBooking cung 1 luc duoc
        return response()->json($detailBooking);

    }
}
