<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cuatrimeste;
use App\Models\Direction;
use App\Models\Trajectory;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
      $User = User::Select('users.id','users.Name',
      'users.Img_User',
      'users.Email',
      'users.Password',
      'users.Matricula',
      'Cuatrimestes.Cuatrimestre',
      'Directions.Name_Direction',
      'Trajectories.Name_Trajectory')
      ->join('Cuatrimestes','Cuatrimestes.id','users.Cuatrimestre_id')
      ->join('Directions','Directions.id','users.Direction_id')
      ->join('Trajectories','Trajectories.id','users.Trajectory_id')->get();
      return view('User.index', compact('User'));
    }
    public function edit($id)
    {
      $Cuatrimeste = Cuatrimeste::all('id','Cuatrimestre');
      $Direction = Direction::all('id','Name_Direction');
      $Trajectory = Trajectory::all('id','Name_Trajectory');
      $User = User::find($id);
      return view('User.edit', compact ('User','Cuatrimeste','Direction','Trajectory'));
  
    }
    public function create()
    {
      $Cuatrimeste = Cuatrimeste::all('id','Cuatrimestre');
      $Direction = Direction::all('id','Name_Direction');
      $Trajectory = Trajectory::all('id','Name_Trajectory');
      $User = User::all();
      return view('User.add', compact('Cuatrimeste','Direction','Trajectory','User'));
       
    }
    public function show($id)
    {
      
      $User = User::Select('users.id','users.Name',
      'users.Img_User',
      'users.Email',
      'users.Password',
      'users.Matricula',
      'Cuatrimestes.Cuatrimestre',
      'Directions.Name_Direction',
      'Trajectories.Name_Trajectory')
      ->join('Cuatrimestes','Cuatrimestes.id','users.Cuatrimestre_id')
      ->join('Directions','Directions.id','users.Direction_id')
      ->join('Trajectories','Trajectories.id','users.Trajectory_id')->find($id);
      return view('User.show')->with('User',$User);
   
    }
    public function update(Request $request, $id)
    {
    //
   
    $User = User::find($id);
    $rules =[
      'Name'=> 'required|min:10',
      'Email' =>'required|min:10',
      'Password' =>'required|min:10',
      'Matricula'=> 'required|min:10',
      'Cuatrimestre_id' =>'required',
      'Direction_id'=> 'required',
      'Trajectory_id'=> 'required'
    ];
    if($request->hasFile('Img_User')){
      $User['Img_User']=$request->file('Img_User')->update('image');
    }
    $this->validate($request, $rules);
    $input=$request->all();
    $User->update($input);
    return redirect('User')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $User = User::find($id);

        if(is_null($User)){

            return  redirect()->route('User.index');

        }

        $User->delete();
    return redirect()->route('User.index');
   }
   public function store(Request $request)
   {
    // 
    $request->validate([
      'Name'=> 'required|min:10',
      'Email' =>'required|Email|unique:Users',
      'Password' =>'required|min:10',
      'Matricula'=> 'required|min:10',
      'Img_User' => '',
      'Cuatrimestre_id' =>'required',
      'Direction_id'=> 'required',
      'Trajectory_id'=> 'required'
  ]);
  $image_path = '';
  if ($request->hasFile('Img_User')) {
      $image_path = $request->file('Img_User')->store('image', 'public');
  }
  User::create([
      'Name' => $request->Name,
      'Email' => $request->Email,
      'Password' => $request->Password,
      'Matricula' => $request->Matricula,
      'Img_User' => $image_path,
      'Cuatrimestre_id' => $request->Cuatrimestre_id,
      'Direction_id' => $request->Direction_id,
      'Trajectory_id' => $request->Trajectory_id,
  ]);

  return redirect('User')->with('message','Se ha creado correctamente');

   }
}
