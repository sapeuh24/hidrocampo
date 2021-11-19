<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localizacion;
use App\Dispositivo;
use Session;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::leftJoin('localizaciones', 'localizaciones.id', '=', 'dispositivos.id_localizacion')
        ->get();
        $localizaciones = Localizacion::get();

        return view('dispositivos', compact('dispositivos', 'localizaciones'));
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
        $dispositivo = new Dispositivo();
        $dispositivo->nomb_sensor = $request->nomb_sensor;
        $dispositivo->id_localizacion = $request->id_localizacion;
        $dispositivo->save();

        return back()->with(Session::flash('message', 'Se ha guardado el dispositivo correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispositivo = Dispositivo::find($id);
        $dispositivo->delete();

        return back()->with(Session::flash('message', 'Se ha eliminado el dispositivo correctamente'));
    }
}