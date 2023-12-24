<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripCreateController extends Controller
{
    function create_trip(){
        return view("tickets.trip_create");
    }
}
