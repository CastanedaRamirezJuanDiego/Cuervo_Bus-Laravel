<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;

class BusController extends Controller
{
   public function index()
   {
       $Bus = Bus::all();
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
      $Bus = Bus::find($id);
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
    $Bus = Bus::findOrFail($id);

    $Bus->delete();
    return redirect('Bus')->with('danger','correctamente la cara de diego :))))');
   
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Matricula'=> '',
      'ID_Driver' =>''
  ];

  $message = [
      'Matricula.required' => '',
      'ID_Driver.required' => ''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
Bus::create($input);
  return redirect('Bus')->with('message','Se ha creado correctamente');

   }
    
}
