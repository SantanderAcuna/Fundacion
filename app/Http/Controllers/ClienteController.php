<?php

namespace App\Http\Controllers;

use App\Afiliacion;
use App\Http\Requests\AfiliacionRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = (new BarrioController)->listarBarrios();
        $eps = (new EpsController)->listarEps();
       
        return view('cliente.index',compact('barrios', 'eps'));
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
    public function store(AfiliacionRequest $request)
    {
        $cedula = Afiliacion::where('cedula', '=', $request->cedula)->first();
        $correo = Afiliacion::where('email', '=', $request->email)->first();
        $telefono = Afiliacion::where('telefono', '=', $request->telefono)->first();

        if ($cedula || $correo || $telefono) {
            return redirect('cliente')->with('error', 'Sus datos ya existen en nuestra base de datos ');
        }

        $afi = new Afiliacion();
        $afi->cedula = $request->cedula;
        $afi->nombre = $request->nombre;
        $afi->p_apellidos = $request->p_apellidos;
        $afi->s_apellidos = $request->s_apellidos;
        $afi->direccion = $request->direccion;
        $afi->barrio_id = $request->barrio_id;
        $afi->telefono = $request->telefono;
        $afi->email = $request->email;
        $afi->eps_id = $request->eps_id;
        $afi->save();

        return redirect('cliente')->with('status', 'Registro exitoso');
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
