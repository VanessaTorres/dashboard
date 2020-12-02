<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Pais;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Departamentos'])->only(['index']);
        $this->middleware(['permission:Crear Departamento'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Departamento'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departamentos = Departamento::all();
        return view('basico.departamentos.index',['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paises = Pais::all();
        return view('basico.departamentos.create',['paises'=>$paises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        //
        $departamento = new Departamento;
        $departamento->nombre = $request->nombre;
        $departamento->codigo_dane = $request->codigo_dane;
        $departamento->observacion = $request->observacion;
        $departamento->pais_id = $request->pais_id;
        $departamento->estado = $request->estado;
        $departamento->user_created_at = \Auth::user()->id;
        $departamento->save();

        return redirect()->route('departamentos.index')->with('info','El departamento fue registrado con éxito');
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
        $departamento = Departamento::find($id);
        $paises = Pais::all();
        return view('basico.departamentos.show',['departamento'=>$departamento,'paises'=>$paises]);
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
    public function update(DepartamentoRequest $request, $id)
    {
        //
        $departamento = Departamento::find($id);
        $departamento->nombre = $request->nombre;
        $departamento->codigo_dane = $request->codigo_dane;
        $departamento->observacion = $request->observacion;
        $departamento->pais_id = $request->pais_id;
        $departamento->estado = $request->estado;
        $departamento->user_updated_at = \Auth::user()->id;
        $departamento->save();

        return redirect()->route('departamentos.index')->with('info','El departamento fue actualizado con éxito');
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
