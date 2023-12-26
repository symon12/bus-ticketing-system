<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripCreateController extends Controller
{
    function create_trip(){
        return view("tickets.trip_create");
    }

    function store_trip(Request $request){
        $this->validate($request, [
            "from_location" => "required|string|max:250",
            "to_location" => "required|string|max:250",
            "trip_date" => "required|date",
        ]);
        

        $trip= new Trip();
        $trip->from_location =$request->input("from_location");
        $trip->to_location=$request->input("to_location");
        $trip->trip_date=$request->input("trip_date");
        $trip->save();
        return redirect()->back()->with("success","trip create successfully");

    }
}

