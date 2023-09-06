<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Vehicles;
use App\Http\Controllers\driverController;
use App\Models\Vehicle;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('vehicle/',[Vehicles::class,'index']);
// Route::get('vehicle/create',[Vehicles::class,'create']);
// Route::post('vehicle/',[Vehicles::class,'store']);
// Route::get('vehicle', [Vehicles::class,'index']);

Route::resource('vehicle', Vehicles::class);
Route::resource('driver', driverController::class);
