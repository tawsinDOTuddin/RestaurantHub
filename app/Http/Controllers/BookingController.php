<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Restaurant;
use Auth;
use App\User;

class BookingController extends Controller
{
    public function reserve(Request $request)
    {
    	$booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->restaurant_id = $request->restaurant_id;
        $booking->timing = $request->date." ".$request->time.":00";
        $booking->status = 1;  //1 means pending
        $booking->save();
        $name= Auth::user()->username;
        return redirect()->route('profile', ['user' => $name]);
        //return "booking successful";
    }

    public function destroy($id)
    {
        $booking = Booking::where('id', $id)->first();
        
        $uid=$booking->user_id;
        //$booking->status = 0;
        //$booking->save();
        $booking->delete();
        //$list = Booking::where('restaurant_id', $id)->get();
        //$list = Booking::where([
        //    ['restaurant_id','=', $id],
        //    ['status', '=', '1'], //1 means pending
        //])->get();
        $user = User::where('id', $uid)->first();
        $name=$user->username;
        //return view('profile', compact('user'));
        return redirect()->route('profile', ['user' => $name]);
        //return view('admin.bookinglist', compact('list'));
        //return redirect()->route('bookinglist', ['res_id' => $id]);
    }
}
