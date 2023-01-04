<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;

class ApiBusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bus = Bus::Select('buses.id'
        ,'buses.Matricula',
        'drivers.Name_Driver')
        ->join('drivers','drivers.id','buses.Driver_id')->get();

        return Response()->json(['Bus'=>$Bus],200);
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
            'Matricula'=> 'required|min:10|unique:Buses',
            'ID_Driver' =>'required'
        ];
      
        $message = [
            'Matricula.required' => 'El Campo esta vacio',
            'ID_Driver.required' => ''
        ];
        $this->validate($request, $rules, $message);
        $input=$request->all();
      Bus::create($input);

        return ('el Bus se dio de alta con exito ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Bus = Bus::find($id);

        return Response()->json($Bus,200);
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
        $Bus = Bus::findOrFail($id);
        $rules =[
            'Matricula'=> 'required',
            'ID_Driver' =>'required'
        ];
        $this->validate($request, $rules);
        $input=$request->all();
        $Bus->update($input);

        return ('el Bus se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bus = Bus::find($id);

        if(is_null($Bus)){

            return response()->json('No se pudo realizar correctamente la operacion',404);

        }

        $Bus->delete();

        return response()->noContent();
    }
}
