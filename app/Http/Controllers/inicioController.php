<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use App\Models\Trajectory;
use App\Models\Truck_stop;


class inicioController extends Controller
{
    public function index(){
$Driver=Driver::count('id');
$User=User::count('id');
$Trajectory=Trajectory::count('id');
$Truck_stop=Truck_stop::count('id');

return view('welcome',compact('Driver','User','Trajectory','Truck_stop'));
    }
}
