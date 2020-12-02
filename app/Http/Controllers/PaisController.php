<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use App\Http\Requests\PaisRequest;

class PaisController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Paises'])->only(['index']);
        $this->middleware(['permission:Crear Pais'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Pais'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paises = Pais::all();
        return view('basico.paises.index',['paises'=>$paises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basico.paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaisRequest $request)
    {
        //
        $pais = new Pais;
        $pais->nombre = $request->nombre;
        $pais->codigo_dane = $request->codigo_dane;
        $pais->codigo_iso = $request->codigo_iso;
        $pais->estado = $request->estado;
        $pais->user_created_at = \Auth::user()->id;
        $pais->save();
        return redirect()->route('paises.index')->with('info','El pais fue registrado con éxito');
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
        $pais = Pais::find($id);
        return view('basico.paises.show',['pais'=>$pais]);
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
    public function update(PaisRequest $request, $id)
    {
        //
        $pais = Pais::find($id);
        $pais->nombre = $request->nombre;
        $pais->codigo_dane = $request->codigo_dane;
        $pais->codigo_iso = $request->codigo_iso;
        $pais->estado = $request->estado;
        $pais->user_updated_at = \Auth::user()->id;
        $pais->save();
        return redirect()->route('paises.index')->with('info','El pais fue actualizado con éxito');
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
