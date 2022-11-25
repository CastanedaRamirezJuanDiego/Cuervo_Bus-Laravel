<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BusController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CuatrimesteController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TrajectoryController;
use App\Http\Controllers\TruckstopController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('Bus', BusController::class);

Route::resource('Center', CenterController::class);

Route::resource('Cuatrimeste', CuatrimesteController::class);

Route::resource('Detail', DetailController::class);

Route::resource('Direction', DirectionController::class);

Route::resource('Driver', DriverController::class);

Route::resource('Trajectory', TrajectoryController::class);

Route::resource('Truck_stop', TruckstopController::class);

Route::resource('User', UserController::class);