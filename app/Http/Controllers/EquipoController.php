<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('jugador.ingresar');
    }

    public function entrar(Request $request)
    {
        $clave_equipo = $request->input('clave');
        $equipo = Equipo::where('clave', $clave_equipo)->first();
        if (!$equipo) {
            abort(500, "No existe el equipo solicitado");
        }
        return view('jugador.espera', compact('equipo'));
    }

    public function espera()
    {
        return view('jugador.espera');
    }

    public function botonJugador($id)
    {
        $equipo = Equipo::find($id);
        if (!$equipo) {
            abort(500, "No existe el equipo solicitado");
        }
        $nombre = $equipo->nombre;
        return view('jugador.boton',compact($nombre));
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
        //
    }
}
