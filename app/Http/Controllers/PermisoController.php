<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Modulo;
use App\Http\Requests\PermisosRequest;

class PermisoController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Permisos'])->only(['index']);
        $this->middleware(['permission:Crear Permiso'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Permiso'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permission::all();

        return view('config.permisos.index',[
            'permisos'=>$permisos,
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
        $modulos = Modulo::all();
        return view('config.permisos.create',[
            'modulos'=>$modulos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermisosRequest $request)
    {
        $permiso = new Permission;
        $permiso->name = $request->name;
        $permiso->guard_name = 'web';
        $permiso->modulo_id = $request->modulo_id;
        $permiso->save();
        return redirect()->route('permisos.index')->with('info','El permiso fue registrado con éxito');
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
        $permiso = Permission::find($id);
        $modulos = Modulo::all();
        return view('config.permisos.show',[
            'permiso'=>$permiso,
            'modulos'=>$modulos,
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
    public function update(PermisosRequest $request, $id)
    {
        //
        $permiso = Permission::find($id);
        $permiso->name = $request->name;
        $permiso->guard_name = 'web';
        $permiso->modulo_id = $request->modulo_id;
        $permiso->save();
        return redirect()->route('permisos.index')->with('info','El permiso fue actualizado con éxito');
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
