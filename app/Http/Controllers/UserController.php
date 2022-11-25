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
      $User = User::all();
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

       $User = User::find($id);
       return view('User.show')->with('User',$User);
   
    }
    public function update(Request $request, $id)
    {
    //
    $User = User::findOrFail($id);
    $rules =[
        'Name'=> '',
        'Img_User' =>'',
        'Email' =>'',
        'Password' =>'',
        'Matricula'=> '',
        'Cuatrimestre_id'=> '',
        'Direction_id' =>'',
        'Trajectory_id'=> ''
    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $User->update($input);
    return redirect('User')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $User = User::findOrFail($id);

    $User->delete();
    return redirect('User')->with('danger','correctamente ');
  
   }
   public function store(Request $request)
   {
    //
    $rules =[
      'Name'=> '',
      'Img_User' =>'',
      'Email' =>'',
      'Password' =>'',
      'Matricula'=> '',
      'Cuatrimestre_id'=> '',
      'Direction_id' =>'',
      'Trajectory_id'=> ''
  ];

  $message = [
   'Name.required'=> '',
   'Img_User.required' =>'',
   'Email.required' =>'',
   'Password.required' =>'',
   'Matricula.required'=> '',
   'Cuatrimestre_id.required'=> '',
   'Direction_id.required' =>'',
   'Trajectory_id.required'=> ''
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  User::create($input);
  return redirect('User')->with('message','Se ha creado correctamente');

   }
}
