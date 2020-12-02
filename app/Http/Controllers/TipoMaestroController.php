<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMaestro;
use App\Http\Requests\TipoMaestroRequest;

class TipoMaestroController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Tipo Maestro'])->only(['index']);
        $this->middleware(['permission:Crear Tipo Maestro'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Tipo Maestro'])->only(['show','update']);
    }

    public function index()
    {
        $tiposmaestro = TipoMaestro::all();
        return view('basico.tiposmaestro.index',[
            'tiposmaestro'=>$tiposmaestro,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('basico.tiposmaestro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoMaestroRequest $request)
    {
        $tipomaestro = new TipoMaestro;
        $tipomaestro->nombre = $request->nombre;
        $tipomaestro->observacion = $request->observacion;
        $tipomaestro->estado = $request->estado;
        $tipomaestro->user_created_at = \Auth::user()->id;
        $tipomaestro->save();
        return redirect()->route('tiposmaestro.index')->with('info','El tipo maestro fue registrado con éxito');
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
        $tipomaestro = TipoMaestro::find($id);
        return view('basico.tiposmaestro.show',[
            'tipomaestro'=>$tipomaestro,
        ]);
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
    public function update(TipoMaestroRequest $request, $id)
    {
        //
        $tipomaestro = TipoMaestro::find($id);
        $tipomaestro->nombre = $request->nombre;
        $tipomaestro->observacion = $request->observacion;
        $tipomaestro->estado = $request->estado;
        $tipomaestro->user_updated_at = \Auth::user()->id;
        $tipomaestro->save();
        return redirect()->route('tiposmaestro.index')->with('info','El tipo maestro fue actualizado con éxito');
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
