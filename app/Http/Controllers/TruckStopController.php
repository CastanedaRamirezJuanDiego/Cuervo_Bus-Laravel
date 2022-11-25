<?php

namespace App\Http\Controllers;
use App\Models\Truck_stop;
use Illuminate\Http\Request;

class TruckstopController extends Controller
{
    //
    public function index()
    {
      $Truck_stop = Truck_stop::all();
      return view('Truck_stop.index', compact('Truck_stop'));
    }
    public function edit($id)
    {
      $Truck_stop = Truck_stop::find($id);
      return view('Truck_stop.edit')->with('Truck_stop', $Truck_stop);
  
    }
    public function create()
    {
       return view('Truck_stop.add');
    }
    public function show($id)
    {
      $Truck_stop = Truck_stop::find($id);
      return view('Truck_stop.show')->with('Truck_stop',$Truck_stop);
    }
    public function update(Request $request, $id)
    {
    //
     $Truck_stop = Truck_stop::findOrFail($id);
        $rules =[
            'Name_Truck_stop'=> '',
            'Length' =>'',
            'Latitude' =>''
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $Truck_stop->update($input);
        return redirect('Truck_stop')->with('message','Se ha actualizado el registro correctamente');
    }


    public function destroy($id)
   {
    //
    $Truck_stop = Truck_stop::findOrFail($id);

    $Truck_stop->delete();
    return redirect('Truck_stop')->with('danger','correctamente ');
  
   }

   public function store(Request $request)
   {
    //
    $rules =[
      'Name_Truck_stop'=> '',
        'Length' =>'',
        'Latitude' =>''
  ];

  $message = [
   'Name_Truck_stop.required'=> '',
   'Length.required' =>'',
   'Latitude.required' =>''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Truck_stop::create($input);
  return redirect('Truck_stop')->with('message','Se ha creado correctamente');
   }
    
}
