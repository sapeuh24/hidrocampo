<?php

namespace App\Http\Controllers;

use App\Localizacion;
use App\Ciudad;
use App\User;
use App\Plan;
use App\Dispositivo;
use Illuminate\Http\Request;
use Session;

class LocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localizaciones = Localizacion::leftJoin('ciudades', 'localizaciones.id_ciudad', 'ciudades.id')
        ->leftJoin('users', 'localizaciones.id_usuario', 'users.id')
        ->leftJoin('planes', 'localizaciones.id_plan', 'planes.id')
        ->select('localizaciones.direccion', 'ciudades.nomb_ciudad', 'users.nombre', 'users.apellidos', 'planes.nomb_plan', 'localizaciones.id')
        ->get();

        $ciudades = Ciudad::all();
        $usuarios = User::all();
        $planes = Plan::all();

        return view('localizaciones', compact('localizaciones', 'ciudades', 'usuarios', 'planes'));
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
        $localizacion=new Localizacion();
        $localizacion->direccion=$request->direccion;
        $localizacion->id_ciudad=$request->ciudad;
        $localizacion->id_usuario=$request->usuario;
        $localizacion->id_plan=$request->plan;
        $localizacion->save();

        return back()->with(Session::flash('message', 'Se ha guardado el plan correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Localizacion $localizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($localizacion)
    {
        $localizacion = Localizacion::where('localizaciones.id', $localizacion)
        ->leftJoin('ciudades', 'localizaciones.id_ciudad', 'ciudades.id')
        ->leftJoin('planes', 'localizaciones.id_plan', 'planes.id')
        ->leftJoin('users', 'localizaciones.id_usuario', 'users.id')
        ->select(
            'localizaciones.id AS id_localizacion',
            'ciudades.nomb_ciudad',
            'planes.nomb_plan',
            'users.nombre'
        )->first();
        
        dd($localizacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacion $localizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Localizacion  $localizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($localizacion)
    {
        $dispositivos = Dispositivo::where('dispositivos.id_localizacion', $localizacion)->get();

        if (count($dispositivos) > 0) {
            return back()->with(Session::flash('message', 'No se puede eliminar la localización porque tiene dispositivos asociados'));
        } else {
            $localizacion = Localizacion::find($localizacion);
            $localizacion->delete();
            return back()->with(Session::flash('message', 'Localización eliminada correctamente'));
        }
    }
}