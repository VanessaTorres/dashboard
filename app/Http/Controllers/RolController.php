<?php

namespace App\Http\Controllers;

use App\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RolesRequest;
use App\Permission;

class RolController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Roles'])->only(['index']);
        $this->middleware(['permission:Crear Rol'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Rol'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Permisos Rol Consulta

        $roles = Role::all();
        return view('config.roles.index',[
            'roles'=>$roles,
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
        return view('config.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolesRequest $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->save();
        return redirect()->route('roles.index')->with('info','El rol fue registrado con éxito');
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
        $role = Role::find($id);
        $permisos = Permission::orderBy('modulo_id', 'ASC')->get();
        $modulos =  $permisos->groupBy('modulo_id');

        //dd($modulos);
        return view('config.roles.show',[
            'rol'=>$role,
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
    public function update(Request $request, $id)
    {
        //
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permisos);
        return redirect()->route('roles.show',$role->id)->with('info','El rol fue actualizado con éxito');
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
