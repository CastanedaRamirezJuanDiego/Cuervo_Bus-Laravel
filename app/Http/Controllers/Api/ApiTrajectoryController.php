<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Trajectory;
use Illuminate\Http\Request;

class ApiTrajectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Trajectory = Trajectory::all();

        return Response()->json(['Trajectory'=>$Trajectory],200);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'Name_Trajectory'=> 'required',
            'Length' =>'required',
            'Latitude' =>'required'
        ];
        $message = [
            'Name_Trajectory.required' => 'El campo es requerido',
            'Length.required' => 'El campo es requerido',
            'Latitude.required' => 'El campo es requerido'
        ];
        $this->validate($request, $rules, $message);
        $input=$request->all();
        Trajectory::create($input);

        return ('La Trajectory se dio de alta con exito ');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Trajectory = Trajectory::find($id);

        return Response()->json($Trajectory,200);


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
        $Trajectory = Trajectory::findOrFail($id);
        $rules =[
            'Name_Trajectory'=> 'required',
            'Length' =>'required',
            'Latitude' =>'required'
        ];
        $this->validate($request, $rules);
        $input=$request->all();
        $Trajectory->update($input);

        return ('La Trajectory se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Trajectory = Trajectory::find($id);

        if(is_null($Trajectory)){

            return response()->json('No se pudo realizar correctamente la operacion',404);

        }

        $Trajectory->delete();

        return response()->noContent();
    }
}
