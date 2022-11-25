<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Center;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //
    public function index()
    {
      $Driver = Driver::all();
      return view('Driver.index', compact('Driver'));
    }
    public function edit($id)
    {
      $Center = Center::all();
      $Driver = Driver::findOrFail($id);
      return view('Driver.edit', compact('Driver','Center'));



      $Driver = Driver::find($id);
      return view('Driver.edit')->with('Driver', $Driver);
   
       //return view('Driver.edit');
    }
    public function create()
    {
      $Center = Center::all('id','Center');

       return view('Driver.add',compact('Center'));
    }
    public function show($id)
    {
      $Driver = Driver::find($id);
      return $Driver;
      return view('Driver.show');
    }
    public function update(Request $request, $id)
    {
    //
    $Driver = Driver::findOrFail($id);
    $rules =[
        'Name_Driver'=> '',
        'Email' =>'',
        'Password' =>'',
        'Phone_Number' =>'',
        'Age'=> '',
        'License' =>'',
        'ID_Center' =>''

    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $Driver->update($input);
    return redirect('Driver')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $Driver = Driver::findOrFail($id);

    $Driver->delete();
    return redirect('Driver')->with('danger','correctamente ');
  
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Name_Driver'=> '',
      'Email' =>'',
      'Password' =>'',
      'Phone_Number' =>'',
      'Age'=> '',
      'License' =>'',
      'ID_Center' =>''
  ];

  $message = [
   'Name_Driver.required'=> '',
   'Email.required' =>'',
   'Password.required' =>'',
   'Phone_Number.required' =>'',
   'Age.required'=> '',
   'License.required' =>'',
   'ID_Center.required' =>''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Driver::create($input);
  return redirect('Driver')->with('message','Se ha creado correctamente ');

   }
}
