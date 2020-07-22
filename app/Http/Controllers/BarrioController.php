<?php

namespace App\Http\Controllers;

use App\Barrio;
use App\Http\Requests\RequestBarrio;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $barrios = $this->listarBarrios();

        return view('barrio.index', compact('barrios'));
    }

    public function listarBarrios()
    {
        $barrios = Barrio::orderBy('id', 'desc')->get();
        return $barrios;
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
    public function store(RequestBarrio $request)
    {
        $barrio = new Barrio();
        $barrio->nombre = $request->nombre;
        $barrio->save();
        return redirect('barrio')->with('status', 'El barrio ' . $barrio->nombre .' fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function show(Barrio $barrio)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barrio = Barrio::findOrFail($id);

        return view('barrio.edit', compact('barrio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actualizar =  Barrio::findOrFail($id);
        $actualizar->name = $request->name;
        //$actualizar->save();
        return $actualizar;
        // return back()->with('status', 'Barrio actualizado de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar =  Barrio::findOrFail($id);
        $eliminar->delete();
        return back()->with('error', 'El barrio ' . $eliminar->nombre . ' fue eliminado');
    }
}
