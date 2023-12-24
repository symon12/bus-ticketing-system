<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripCreateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dashboard",[HomeController::class,"search_item"])->name("layout.home");
Route::get("/create_trip",[TripCreateController::class,"create_trip"])->name("create_trip");
Route::post("/create_trip/form",[TripCreateController::class,"store_trip"])->name("store_trip");







