<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function respage($id)
    {
    	$res = Restaurant::where('id', $id)->first();
    	return view('restaurantpage', compact('res'));
    }
}
