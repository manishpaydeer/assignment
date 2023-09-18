<?php

use App\Http\Controllers\CalculateController;
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

// route to show volumetric calculator view.
Route::get('/', function () {
    return view('index');
});

Route::post('/calculate' , [CalculateController::class , "index"]);
