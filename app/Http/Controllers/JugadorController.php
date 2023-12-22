<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $datos['jugadores']=Jugador::paginate(4);
        return view('jugadores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Apodo' => 'required|string|max:100',
            'Nombre' => 'required|string|max:100',
            'CantidadDinero' => 'required|integer|min:10000',
        ];
        $mensaje=[
            'required'=>'el :atributo es requerido',
            'CantidadDinero.required'=> 'el valor debe ser mayor o igual a 10.000'
        ];
        $this->validate($request, $campos, $mensaje);
        $datosJugador = request()->except('_token');
        // $datosJugador = request()->all();
        Jugador::insert($datosJugador);
        // return response()->json($datosJugador);
        return redirect('jugadores')->with('mensaje','Jugador agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $jugador=Jugador::findOrFail($id);

        return view('jugadores.edit',compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Apodo' => 'required|string|max:100',
            'Nombre' => 'required|string|max:100',
            'CantidadDinero' => 'required|integer|min:10000',
        ];
        $mensaje=[
            'required'=>'el :atributo es requerido',
            'CantidadDinero.required'=> 'el valor debe ser mayor o igual a 10.000'
        ];
        $this->validate($request, $campos, $mensaje);
        $datosJugador = request()->except(['_token', '_method']);
        // $datosJugador = request()->all();
        Jugador::where('id', '=',$id)->update($datosJugador);
        $jugador=Jugador::findOrFail($id);
        return view('jugadores.edit',compact('jugador'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Jugador::destroy($id);
        return redirect('jugadores')->with('mensaje','Jugador eliminado con exito');;
    }
}
