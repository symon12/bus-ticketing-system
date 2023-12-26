<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    
    function search_item(Request $request){
        

        // if ($request->all()) {
        //     $query = Trip::query();
        //     if (!empty($request->trip_date)) {
        //         $query->where('trip_date', $request->trip_date);
        //     }
        //     if (!empty($request->from_location)) {
        //         $query->where('from_location', 'like', "%$request->from_location%");
        //         // $query->where('from_location', $request->from_location);
        //     }
            
        //     if (!empty($request->to_location)) {
        //         $query->where('to_location', 'like', "%$request->to_location%");
        //         // $query->where('to_location', $request->to_location);
            
        //     }
        //     $trips = $query->get();

        //     }
            
        $trips  = [];
        if ($request->all()) {
            $query = Trip::query();
            $AllDateAndLocation= $request;
            $AllDateAndLocation->trip_date;
            $AllDateAndLocation->from_location;
            $AllDateAndLocation->to_location;

        if (!empty($AllDateAndLocation)) {
            $query->where('trip_date', $request->trip_date)
                  ->where('from_location', 'like', "%$request->from_location%")
                  ->where('to_location', 'like', "%$request->to_location%");
        
                }
                $trips = $query->get();
        }else{
            return redirect()->back()->with("error", "No bus found for selected dates or cities. Please try different dates or cities");
        }

        $tripId = $request->input('trip_id');
    $trip = Trip::findOrFail($tripId);

    if ($trip->available_seats > 0) {
        // Decrement the available seats by 1
        $trip->available_seats -= 1;
        $trip->save();

        return redirect()->back()->with('success', 'Seat booked successfully.');
    } else {
        return redirect()->back()->with('error', 'No available seats for booking.');
    }
    
    return view("Layouts.home",compact("trips"));
        
        }

    //     function booking(Request $request, $id){
    //         $trip = Trip::findOrFail($id);

    //     if ($trip->available_seats > 0) {
    //         // Decrement the available seats by 1
    //         $trip->available_seats -= 1;
    //         $trip->save();

    //         return redirect()->back()->with('success', 'Seat booked successfully.');
    //     } else {
    //         return redirect()->back()->with('error', 'No available seats for booking.');
    //     }
        
    //         return view("Layouts.home",compact("trips"));
        
    //     }
    }
   
    
        


    
