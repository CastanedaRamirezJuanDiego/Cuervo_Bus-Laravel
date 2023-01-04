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
      $Driver = Driver::Select('drivers.id'
      ,'drivers.Name_Driver',
      'drivers.Email',
      'drivers.Password',
      'drivers.Phone_Number',
      'drivers.Age',
      'drivers.License',
      'centers.Center',)
      ->join('centers','centers.id','drivers.center_id')->get();
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
      $Driver = Driver::Select('drivers.id'
      ,'drivers.Name_Driver',
      'drivers.Email',
      'drivers.Password',
      'drivers.Phone_Number',
      'drivers.Age',
      'drivers.License',
      'centers.Center',)
      ->join('centers','centers.id','drivers.center_id')->first();
      return view('Driver.show', compact('Driver'));
    }
    public function update(Request $request, $id)
    {
    //
    if($request->hasFile('License')){
      $Driver['License']=$request->file('License')->store('image','public');
    }
    $Driver = Driver::findOrFail($id);
    $rules =[
      'Name_Driver'=> 'required|min:10',
      'Email' =>'required|min:10',
      'Password' =>'required|min:10',
      'Phone_Number' =>'required|min:12',
      'Age'=> 'required|min:2',

    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $Driver->update($input);
    return redirect('Driver')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $Driver = Driver::find($id);

    if(is_null($Driver)){

        return  redirect()->route('Driver.index');

    }

    $Driver->delete();
    return redirect()->route('Driver.index');
  
   }
   public function store(Request $request)
   {
    //
    if($request->hasFile('License')){
      $User['License']=$request->file('License')->store('uploads','public');
    }
    $rules =[
      'Name_Driver'=> 'required|min:10',
      'Email' =>'required|min:10|unique:Drivers',
      'Password' =>'required|min:10',
      'Phone_Number' =>'required|min:12',
      'Age'=> 'required|min:2'
     
  ];

  $message = [
   'Name_Driver.required'=> 'El campo  esta vacio',
   'Email.required' =>'El campo  esta vacio',
   'Password.required' =>'El campo  esta vacio',
   'Phone_Number.required' =>'El campo  esta vacio',
   'Age.required'=> 'El campo  esta vacio'
  
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Driver::create($input);
  return redirect('Driver')->with('message','Se ha creado correctamente ');

   }
}
