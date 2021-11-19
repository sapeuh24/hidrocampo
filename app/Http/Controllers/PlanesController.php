<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Localizacion;
use Session;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Plan::get();

        return view('planes', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //$_POST = $REQUEST;
    public function store(Request $request)
    {
        $plan = new Plan();
        $plan->nomb_plan = $request->nomb_plan;
        $plan->precio = $request->precio;
        $plan->cant_dispositivos = $request->cantidad;
        $plan->save();

        return back()->with(Session::flash('message', 'Se ha guardado el plan correctamente'));
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
        $plan = Plan::find($id);

        return response()->json($plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $plan = Plan::find($request->id_plan);

        $plan->nomb_plan = $request->nomb_plan_edit;
        $plan->precio = $request->precio_edit;
        $plan->cant_dispositivos = $request->cantidad_edit;
        $plan->update();

        return back()->with(Session::flash('message', 'Se ha actualizado el plan correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $localizaciones = Localizacion::where('localizaciones.id_plan', $id)->get();

        if (count($localizaciones) > 0) {
            return back()->with(Session::flash('message', 'No se puede eliminar el plan porque tiene localizaciones asociadas'));
        } else {
            $plan = Plan::find($id);
            $plan->delete();
            return back()->with(Session::flash('message', 'Plan eliminado correctamente'));
        }
    }
}