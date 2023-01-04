<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck_stop;

class ApiTruckStopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Truck_stop = Truck_stop::all();

        return Response()->json(['Grupos'=>$Truck_stop],200);
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
            'Name_Truck_stop'=> 'required',
            'Length' =>'required',
            'Latitude' =>'required'
        ];
        $message = [
            'Name_Truck_stop.required' => 'El campo es requerido',
            'Length.required' => 'El campo es requerido',
            'Latitude.required' => 'El campo es requerido'
        ];

        $this->validate($request, $rules, $message);
        $input=$request->all();
        Truck_stop::create($input);

        return ('La parada de autobus se dio de alta con exito ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Truck_stop = Truck_stop::find($id);

        return Response()->json($Truck_stop,200);
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
        $Truck_stop = Truck_stop::findOrFail($id);
        $rules =[
            'Name_Truck_stop'=> 'required',
            'Length' =>'required',
            'Latitude' =>'required'
        ];
        $this->validate($request, $rules);
        $input=$request->all();
        $Truck_stop->update($input);

        return ('La parada de autobus se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Truck_stop = Truck_stop::find($id);

        if(is_null($Truck_stop)){

            return response()->json('No se pudo realizar correctamente la operacion',404);

        }

        $Truck_stop->delete();

        return response()->noContent();
    }
}
