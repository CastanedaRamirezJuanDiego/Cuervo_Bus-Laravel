<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\Cuatrimeste;
use App\Models\Direction;
use App\Models\Trajectory;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return Response()->json(['User'=>$User],200);
    }


    public function create()
    {
        //
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
      
        return ('Se ha creado correctamente');
    }

    public function show($id)
    {
        //
        
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
      ->join('Trajectories','Trajectories.id','users.Trajectory_id')->first();
      
       return Response()->json($User,200);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $rules =[
          'Name'=> 'required|min:10',
          'Email' =>'required|min:10',
          'Password' =>'required|min:10',
          'Matricula'=> 'required|min:10',
          'Img_User' => '',
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
        return ('Se ha actualizado el registro correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);

        if(is_null($User)){

            return response()->json('No se pudo realizar correctamente la operacion',404);

        }

        $User->delete();
        return response()->noContent();  
    }
}
