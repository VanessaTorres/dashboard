<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use App\Http\Requests\PaqueteRequest;

class PaqueteController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Paquetes'])->only(['index']);
        $this->middleware(['permission:Crear Paquete'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Paquete'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return view('config.paquetes.index',[
            'paquetes'=>$paquetes,
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
        return view('config.paquetes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaqueteRequest $request)
    {
        $paquete = new Paquete;
        $paquete->name = $request->name;
        $paquete->url = $request->url;
        $paquete->icon = $request->icon;
        $paquete->observation = $request->observation;
        $paquete->state = $request->state;
        $paquete->user_created_at = \Auth::user()->id;
        $paquete->save();
        return redirect()->route('paquetes.index')->with('status','El paquete fue registrado con éxito');
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
        $paquete = Paquete::find($id);
        return view('config.paquetes.show',[
            'paquete'=>$paquete,
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
    public function update(PaqueteRequest $request, $id)
    {
        //
        $paquete = Paquete::find($id);
        $paquete->name = $request->name;
        $paquete->url = $request->url;
        $paquete->icon = $request->icon;
        $paquete->observation = $request->observation;
        $paquete->state = $request->state;
        $paquete->user_updated_at = \Auth::user()->id;
        $paquete->save();
        return redirect()->route('paquetes.index')->with('info','El paquete fue actualizado con éxito');
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
