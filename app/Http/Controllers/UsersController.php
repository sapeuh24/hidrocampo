<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('usuarios', compact('users'));

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
    public function store(Request $request)
    {
        $user= new User();
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return back()->with(Session::flash('message', 'Se ha creado el usuario: '. $user->nombre));
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
        $user = User::find($id);

        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->update();

        return back()->with(Session::flash('message', 'Se ha actualizado el usuario: '. $user->nombre));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return back()->with(Session::flash('message', 'Se ha eliminado el usuario: '. $user->nombre));
    }
}
