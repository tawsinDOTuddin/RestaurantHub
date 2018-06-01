<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Auth;

class SearchController extends Controller
{
    
	public function search(Request $request)
    {
        $naam = $request->searchname;
        $results = Restaurant::where('area', 'LIKE', "%{$naam}%")->get();
        return view('searchpage', compact('results'));
    }

    public function typeahead(Request $request){
        /**$query = $request->get('term','');        
        $results=Restaurant::where('area','LIKE','%'.$query.'%')->get();        
        return response()->json($results);**/
        $data = Restaurant::select("area as name")->where("area","LIKE","%{$request->input('query')}%")->groupBy('area')->get();

        return response()->json($data);
}
}
