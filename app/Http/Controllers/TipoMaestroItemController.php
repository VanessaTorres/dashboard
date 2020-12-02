<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMaestroItem;
use App\TipoMaestro;
use App\Http\Requests\TipoMaestroItemRequest;

class TipoMaestroItemController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Tipo Maestro Item'])->only(['index']);
        $this->middleware(['permission:Crear Tipo Maestro Item'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Tipo Maestro Item'])->only(['show','update']);
    }

    public function index()
    {
        $tiposmaestroitem = TipoMaestroItem::all();
        return view('basico.tiposmaestroitem.index',[
            'tiposmaestroitem'=>$tiposmaestroitem,
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
        $tiposmaestro = TipoMaestro::all();
        return view('basico.tiposmaestroitem.create',['tiposmaestro'=>$tiposmaestro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoMaestroItemRequest $request)
    {
        $tipomaestroitem = new TipoMaestroItem;
        $tipomaestroitem->nombre = $request->nombre;
        $tipomaestroitem->numitem = $request->numitem;
        $tipomaestroitem->observacion = $request->observacion;
        $tipomaestroitem->estado = $request->estado;
        $tipomaestroitem->tipomaestro_id = $request->tipomaestro_id;
        $tipomaestroitem->user_created_at = \Auth::user()->id;
        $tipomaestroitem->save();
        return redirect()->route('tiposmaestroitem.index')->with('info','El tipo maestro item fue registrado con éxito');
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
        $tipomaestroitem = TipoMaestroItem::find($id);
        $tiposmaestro = TipoMaestro::all();
        return view('basico.tiposmaestroitem.show',[
            'tipomaestroitem'=>$tipomaestroitem,
            'tiposmaestro'=>$tiposmaestro,
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
    public function update(TipoMaestroItemRequest $request, $id)
    {
        //
        $tipomaestroitem = TipoMaestroItem::find($id);
        $tipomaestroitem->nombre = $request->nombre;
        $tipomaestroitem->numitem = $request->numitem;
        $tipomaestroitem->observacion = $request->observacion;
        $tipomaestroitem->estado = $request->estado;
        $tipomaestroitem->tipomaestro_id = $request->tipomaestro_id;
        $tipomaestroitem->user_updated_at = \Auth::user()->id;
        $tipomaestroitem->save();
        return redirect()->route('tiposmaestroitem.index')->with('info','El tipo maestro item fue actualizado con éxito');

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
