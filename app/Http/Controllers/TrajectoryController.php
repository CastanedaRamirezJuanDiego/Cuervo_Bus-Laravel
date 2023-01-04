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
            'Name_Trajectory'=> 'required|min:10',
            'Length' =>'required|min:10',
            'Latitude' =>'required|min:10'
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $Trajectory->update($input);
        return redirect('Trajectory')->with('message','Se ha actualizado el registro correctamente');
    }

    
    public function destroy($id)
   {
    //
   $Trajectory = Trajectory::find($id);

        if(is_null($Trajectory)){

            return  redirect()->route('Trajectory.index');

        }

        $Trajectory->delete();

        return  redirect()->route('Trajectory.index');
   }



   public function store(Request $request)
   {
    //


    
    $rules =[
      'Name_Trajectory'=> 'required|min:10|unique:Trajectories',
      'Length' =>'required|min:10',
      'Latitude' =>'required|min:10'
  ];

  $message = [
      'Name_Trajectory.required' => 'El campo  esta vacio',
      'Length.required' => 'El campo  esta vacio',
      'Latitude.required' => 'El campo  esta vacio'
  ];


  
  
  $this->validate($request, $rules, $message);
  $input=$request->all();
  Trajectory::create($input);
  return redirect('Trajectory')->with('message','Se ha creado correctamente la trajectoria');

   }
    
}
