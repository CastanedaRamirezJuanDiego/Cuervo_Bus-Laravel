<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;

class BusController extends Controller
{
   public function index()
   {
       $Bus = Bus::Select('buses.id'
       ,'buses.Matricula',
       'drivers.Name_Driver')
       ->join('drivers','drivers.id','buses.Driver_id')->get();
      return view('Bus.index', compact('Bus'));
   }
    
    public function edit($id)
    {


      $Driver = Driver::all();
      $Bus = Bus::findOrFail($id);
      return view('Bus.edit', compact('Driver','Bus'));
   
    }
    public function create()
    {
      
      $Driver = Driver::all();
       return view('Bus.add',compact('Driver'));
    }
    public function show($id)
    {
      $Bus = Bus::Select('buses.id'
      ,'buses.Matricula',
      'drivers.Name_Driver')
      ->join('drivers','drivers.id','buses.Driver_id')->first();
      return view('Bus.show')->with('Bus',$Bus);

    }
    public function update(Request $request, $id)
    {
    //
    $Bus = Bus::findOrFail($id);
    $rules =[
        'Matricula'=> '',
        'ID_Driver' =>''
    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $Bus->update($input);
    return redirect('Bus')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
      //
      $Bus = Bus::find($id);

      if(is_null($Bus)){

          return  redirect()->route('Bus.index');

      }

      $Bus->delete();
    return redirect()->route('Bus.index');
   
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Matricula'=> 'required|min:10|unique:Buses',
      'ID_Driver' =>''
  ];

  $message = [
      'Matricula.required' => 'El Campo esta vacio',
      'ID_Driver.required' => 'El campo esta cavio'
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
Bus::create($input);
  return redirect('Bus')->with('message','Se ha creado correctamente');

   }
    
}
