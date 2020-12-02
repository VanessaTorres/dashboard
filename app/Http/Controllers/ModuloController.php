<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Modulo;

use Illuminate\Http\Request;
use App\Http\Requests\ModuloRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ModuloController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Modulos'])->only(['index']);
        $this->middleware(['permission:Crear Modulo'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Modulo'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();
        return view('config.modulos.index',[
            'modulos'=>$modulos,
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
        $paquetes = Paquete::all();
        return view('config.modulos.create',[
            'paquetes'=>$paquetes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuloRequest $request)
    {
        $modulo = new Modulo;
        $modulo->name = $request->name;
        //$modulo->url = $request->url;
        $modulo->url = 'base';
        $modulo->icon = $request->icon;
        $modulo->observation = $request->observation;
        $modulo->state = $request->state;
        $modulo->paquete_id = $request->paquete_id;
        $modulo->user_created_at = \Auth::user()->id;
        $modulo->position = 6;
        $modulo->save();

        $role = Role::findByName('Administrador');

        $array_permisos = array();

        $permiso_crear = new Permission;
        $permiso_crear->name = "Crear ".ucwords(strtolower ( $request->name));
        $permiso_crear->guard_name = 'web';
        $permiso_crear->modulo_id = $modulo->id;
        $permiso_crear->save();

        array_push($array_permisos,$permiso_crear->name);

        $permiso_actualizar = new Permission;
        $permiso_actualizar->name = "Actualizar ".ucwords(strtolower ( $request->name));
        $permiso_actualizar->guard_name = 'web';
        $permiso_actualizar->modulo_id = $modulo->id;
        $permiso_actualizar->save();

        array_push($array_permisos,$permiso_actualizar->name);

        $permiso_listar = new Permission;
        $permiso_listar->name = "Listar ".ucwords(strtolower ( $request->name));
        $permiso_listar->guard_name = 'web';
        $permiso_listar->modulo_id = $modulo->id;
        $permiso_listar->save();

        array_push($array_permisos,$permiso_listar->name);

        if(count($array_permisos) > 0){
            $role->givePermissionTo($array_permisos);
        }
        return redirect()->route('modulos.index')->with('info','El modulo fue registrado con éxito');
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
        $modulo = Modulo::find($id);
        $paquetes = Paquete::all();
        return view('config.modulos.show',[
            'modulo'=>$modulo,
            'paquetes'=>$paquetes,
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
    public function update(ModuloRequest $request, $id)
    {
        //
        $modulo = Modulo::find($id);
        $modulo->name = $request->name;
        $modulo->url = $request->url;
        $modulo->icon = $request->icon;
        $modulo->observation = $request->observation;
        $modulo->state = $request->state;
        $modulo->paquete_id = $request->paquete_id;
        $modulo->user_updated_at = \Auth::user()->id;
        $modulo->save();
        return redirect()->route('modulos.index')->with('info','El modulo fue actualizado con éxito');
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
