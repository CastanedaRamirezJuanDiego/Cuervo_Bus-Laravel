<?php

namespace App\Http\Controllers;
use App\Models\Trajectory;
use Illuminate\Http\Request;

class TrajectoryController extends Controller
{
    //
    public function index()
    {
      $Trajectory = Trajectory::all();
      return view('Trajectory.index', compact('Trajectory'));
      
    }
    public function edit($id)
    {
      $Trajectory = Trajectory::find($id);
      return view('Trajectory.edit')->with('Trajectory', $Trajectory);
    }
    public function create()
    {
       return view('Trajectory.add');
    }
    public function show($id)
    {
      $Trajectory = Trajectory::find($id);
      return view('Trajectory.show')->with('Trajectory',$Trajectory);
    }
    public function update(Request $request, $id)
    {
    //
     $Trajectory = Trajectory::findOrFail($id);
        $rules =[
            'Name_Trajectory'=> '',
            'Length' =>'',
            'Latitude' =>''
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $Trajectory->update($input);
        return redirect('Trajectory')->with('message','Se ha actualizado el registro correctamente');
    }

    
    public function destroy($id)
   {
    //
    $Trajectory = Trajectory::findOrFail($id);

    $Trajectory->delete();
    return redirect('Trajectory')->with('danger','correctamente la Trajectory');
   }



   public function store(Request $request)
   {
    //
    $rules =[
      'Name_Trajectory'=> '',
      'Length' =>'',
      'Latitude' =>''
  ];

  $message = [
      'Name_Trajectory.required' => '',
      'Length.required' => '',
      'Latitude.required' => ''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  Trajectory::create($input);
  return redirect('Trajectory')->with('message','Se ha creado correctamente la trajectoria');

   }
    
}
