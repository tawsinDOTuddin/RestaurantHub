<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Restaurant;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function list($res_id)
    {
        //$list = Booking::where('restaurant_id', $res_id)->get();
        $list = Booking::where([
            ['restaurant_id','=', $res_id],
            ['status', '=', '1'], //1 means pending
        ])->get();

        return view('admin.bookinglist', compact('list'));
    }

    public function resdetails($res_id)
    {
        $res = Restaurant::where('id', $res_id)->first();
        return view('admin.resdetails', compact('res'));
    }

    public function destroy($id)
    {
        $booking = Booking::where('id', $id)->first();
        
        $id=$booking->restaurant_id;
        $booking->status = 0;
        $booking->save();
        //$booking->delete();
        //$list = Booking::where('restaurant_id', $id)->get();
        $list = Booking::where([
            ['restaurant_id','=', $id],
            ['status', '=', '1'], //1 means pending
        ])->get();
        
        //return view('admin.bookinglist', compact('list'));
        return redirect()->route('bookinglist', ['res_id' => $id]);
    }


}
