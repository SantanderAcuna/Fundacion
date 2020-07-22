<?php

namespace App\Http\Controllers;

use App\Afiliacion;
use App\Exports\AfiliadosExport;
use App\Http\Requests\AfiliacionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class AfiliacionController extends Controller
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
       return  $afi = Afiliacion::join('barrios', 'Afiliacions.id', '=', 'afiliacions.barrio_id')
            ->join('eps', 'eps.id', '=', 'afiliacions.eps_id')
            ->select('afiliacions.*', 'barrios.nombre as barrio', 'eps.nombre as eps')         

            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->get();

           

        //return view('administrador.index', compact('afi'));
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
            return back()->with('error', 'Sus datos ya existen en nuestra base de datos ');
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

        return back()->with('status', 'Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliacion $afiliacion)
    {
        //
    }
}
