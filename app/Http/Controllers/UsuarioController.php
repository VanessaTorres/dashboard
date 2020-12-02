<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use App\Ciudad;
use App\Http\Requests\UsuarioRequest;


class UsuarioController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Usuarios'])->only(['index']);
        $this->middleware(['permission:Crear Usuario'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Usuario'])->only(['show','update']);
    }

    public function index()
    {
        $usuarios = User::all();
        return view('basico.usuarios.index',[
            'usuarios'=>$usuarios,
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
        $roles = Role::all();

        return view('basico.usuarios.create',[
            'roles'=>$roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        DB::beginTransaction();

        try{

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->user_created_at = \Auth::user()->id;
            $user->save();

            $user->assignRole($request->rol);

            DB::commit();
        } catch (\Exception $e) {
            return back()
                ->with('error', "Hubo un error comuniquese con soporte!!<br>".$e->getMessage())->withInput();

        } catch (\Throwable $e) {
            return back()
                ->with('error', "Hubo un error comuniquese con soporte!!<br>".$e->getMessage())->withInput();
        }



        return redirect()->route('usuarios.index')->with('info','El usuario fue registrado con éxito');
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
        $user = User::find($id);
        $roles = Role::all();

        return view('basico.usuarios.show',[
            'roles'=>$roles,
            'usuario' => $user
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
        DB::beginTransaction();

        try{

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if(isset($request->password)){
                $user->password = bcrypt($request->password);
            }
            $user->user_updated_at = \Auth::user()->id;
            $user->save();

            $user->syncRoles($request->rol);

            DB::commit();

        } catch (\Exception $e) {
            return back()
                ->with('error', "Hubo un error comuniquese con soporte!!<br>".$e->getMessage())->withInput();

        } catch (\Throwable $e) {
            return back()
                ->with('error', "Hubo un error comuniquese con soporte!!<br>".$e->getMessage())->withInput();
        }

        return redirect()->route('usuarios.index')->with('info','El usuario fue actualizado con éxito');
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
