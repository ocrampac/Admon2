<?php

namespace App\Http\Controllers;

use App\Models\DatoPersonal;
use App\Models\Estadocivil;
use Illuminate\Http\Request;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $estadosCiviles = Estadocivil::all();
      //$eC=$estadosCiviles->pluck('EstadoCivil', 'id');
      //return view('index');
      //Estas dos lineas son iguales
        //$datos = DatoPersonal::find(1);
        $datos = DatoPersonal::where('id', 1)->first();
        return view('datosPersonales',compact('datos','estadosCiviles'));
      //  return view('../layouts/plantilla');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatoPersonal  $datoPersonal
     * @return \Illuminate\Http\Response
     */
    public function show(DatoPersonal $datoPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatoPersonal  $datoPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(DatoPersonal $datoPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatoPersonal  $datoPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatoPersonal $datoPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatoPersonal  $datoPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatoPersonal $datoPersonal)
    {
        //
    }
}
