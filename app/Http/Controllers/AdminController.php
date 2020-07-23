<?php

namespace App\Http\Controllers;

use App\Afiliacion;
use App\Exports\AfiliacionExport;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
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

    public function export(){

        return Excel::download(new AfiliacionExport, 'Afliados.xlsx');
    }
    


    public function index()
    {
        $afi = Afiliacion::join('barrios', 'barrios.id', '=', 'afiliacions.barrio_id')
            ->join('eps', 'eps.id', '=', 'afiliacions.eps_id')
            ->select('afiliacions.*', 'barrios.nombre as barrio', 'eps.nombre as eps')
            ->get();

       return view('administrador.index', compact('afi'));
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
        $adm = Afiliacion::findOrFail($id);

        return view('administrador.edit', compact('adm'));
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
        $actualizar =  Afiliacion::findOrFail($id);
        $actualizar->nombre = $request->nombre;
        $actualizar->save();

        return redirect('administrador')->with('status', 'Barrio actualizado de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar =  Afiliacion::findOrFail($id);
        $eliminar->delete();
        return redirect('administrador')->with('error', 'El afiliado ' . $eliminar->nombre . ' fue eliminado');
    }
}
