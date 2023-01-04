<?php

namespace App\Http\Controllers;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    //
    public function index()
    {
      $Direction = Direction::all();
      return view('Direction.index', compact('Direction'));
    }
    public function edit($id)
    {
      $Direction = Direction::find($id);
      return view('Direction.edit')->with('Direction', $Direction);
//       return view('Direction.edit');
    }
    public function create()
    {
       return view('Direction.add');
    }
    public function show($id)
    {
      $Direction = Direction::find($id);
      return view('Direction.show')->with('Direction',$Direction);
    }
    public function update(Request $request, $id)
    {
    //
    $Direction = Direction::findOrFail($id);
    $rules =[
        'Name_Direction'=> ''
    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $Direction->update($input);
    return redirect('Direction')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $Direction = Direction::find($id);

        if(is_null($Direction)){

            return  redirect()->route('Direction.index');

        }

        $Direction->delete();
    return redirect()->route('Direction.index');
  
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Name_Direction'=> 'required|min:10|unique:Directions'
  ];

  $message = [
      'Name_Direction.required' => 'El campo esta vacio'
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Direction::create($input);
  return redirect('Direction')->with('message','Se ha creado correctamente la asignatura');

   }
    
}
