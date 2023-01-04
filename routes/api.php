<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiCenterController;
use App\Http\Controllers\Api\ApiCuatrimesteController;
use App\Http\Controllers\Api\ApiDirectionController;
use App\Http\Controllers\Api\ApiDriverController;
use App\Http\Controllers\Api\ApiTruckstopController;
use App\Http\Controllers\Api\ApiTrajectoryController;
use App\Http\Controllers\Api\ApiBusController;
use App\Http\Controllers\Api\ApiUserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::apiResource('Trajectory',ApiTrajectoryController::class);

Route::apiResource('Center',ApiCenterController::class);

Route::apiResource('Cuatrimeste',ApiCuatrimesteController::class);

Route::apiResource('Direction',ApiDirectionController::class);

Route::apiResource('Driver',ApiDriverController::class);

Route::apiResource('Bus',ApiBusController::class);

Route::apiResource('User',ApiUserController::class);

Route::apiResource('Truck_stop',ApiTruckstopController::class);



