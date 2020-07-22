<?php

namespace App\Http\Controllers;

use App\Eps;
use App\Http\Requests\RequestEps;
use Illuminate\Http\Request;

class EpsController extends Controller
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
        $eps = $this->listarEps();

        return view('eps.index', compact('eps'));
    }

    public function listarEps()
    {
        $eps = Eps::orderBy('id','desc')->get();

      return $eps;
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
    public function store(RequestEps $request)
    {
        $codigo = Eps::where('codigo','=',$request->codigo)->first();
        if($codigo){
            return redirect('eps')->with('error', 'Codigo ya existe');
        }

        $eps = new Eps();
        $eps->codigo = $request->codigo;
        $eps->nombre = $request->nombre;
        $eps->regimen = $request->regimen;

        $eps->save();
        return redirect('eps')->with('status', 'Eps creada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function show(Eps $eps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function edit(Eps $eps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eps $eps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = Eps::findOrFail($id);
        $eliminar->delete();
        return back()->with('error', 'La eps ' . $eliminar->nombre . ' fue eliminada');
    }
}
