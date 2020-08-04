<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestTipo;
use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
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
        $tipo = $this->consultarTipo();

        return view('tipo.index', compact('tipo'));
    }

    public function consultarTipo()
    {

        $tipo = Tipo::all();

        return $tipo;
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
        $doc = Tipo::where('nombre', '=', $request->nombre)->first();
        if ($doc) {
            return redirect('tipo')->with('error', 'Tipo de documento ya existe');
        } else {

            $tipo = new Tipo();
            $tipo->nombre = $request->nombre;
            $tipo->save();
            return redirect('tipo')->with('status', 'Tipo de documento creado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::findOrFail($id);

        return view('tipo.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo = new Tipo();
        $tipo->nombre = $request->nombre;
        $tipo->save();
        return redirect('tipo')->with('status', 'Tipo de documento editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->delete();
        return redirect('tipo')->with('error', 'Tipo de documento eliminado');
    }
}
