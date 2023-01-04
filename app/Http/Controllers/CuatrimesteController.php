<?php

namespace App\Http\Controllers;
use App\Models\Cuatrimeste;
use Illuminate\Http\Request;

class CuatrimesteController extends Controller
{
    //
    public function index()
    {
      $Cuatrimeste = Cuatrimeste::all();
      return view('Cuatrimeste.index', compact('Cuatrimeste'));
    }
    public function edit($id)
    {
      $Cuatrimeste = Cuatrimeste::find($id);
      return view('Cuatrimeste.edit')->with('Cuatrimeste', $Cuatrimeste);
   
       //return view('Cuatrimeste.edit');
    }
    public function create()
    {
       return view('Cuatrimeste.add');
    }


    
    public function show($id)
    {
      $Cuatrimeste = Cuatrimeste::find($id);
      return view('Cuatrimeste.show')->with('Cuatrimeste',$Cuatrimeste);
    
      //$Cuatrimestre = Cuatrimeste::find($id);
      //return $Cuatrimestre;
      //return view('Cuatrimeste.show');
    }
    public function update(Request $request, $id)
    {
    //
    $Cuatrimeste = Cuatrimeste::findOrFail($id);
    $rules =[
        'Cautrimestre'=> ''
    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $Cuatrimeste ->update($input);
    return redirect('Cuatrimeste')->with('message','Se ha actualizado el registro correctamente');
 }



    public function destroy($id)
   {
    //
    $Cuatrimeste = Cuatrimeste::findOrFail($id)->delete();
    return redirect()->route('Cuatrimeste.index');
   }


   public function store(Request $request)
   {
    $rules =[
      'Cuatrimestre'=> 'required|min:10|unique:Cuatrimestes'
  ];

  $message = [
      'Cuatrimestre.required' => 'El campo esta vacio'
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Cuatrimeste::create($input);
  return redirect('Cuatrimeste')->with('message','Se ha creado correctamente la asignatura');
}
}
