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
      return $Direction;
      return view('Direction.show');
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
    $Direction = Direction::findOrFail($id);

    $Direction->delete();
    return redirect('Direction')->with('danger','correctamente ');
  
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Name_Direction'=> ''
  ];

  $message = [
      'Name_Direction.required' => ''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Direction::create($input);
  return redirect('Direction')->with('message','Se ha creado correctamente la asignatura');

   }
    
}
