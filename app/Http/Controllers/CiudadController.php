<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Ciudad;
use Illuminate\Http\Request;
use App\Http\Requests\CiudadRequest;
use DB;

class CiudadController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['permission:Listar Ciudad'])->only(['index']);
        $this->middleware(['permission:Crear Ciudad'])->only(['create','store']);
        $this->middleware(['permission:Actualizar Ciudad'])->only(['show','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ciudades = Ciudad::all();
        return view('basico.ciudades.index',['ciudades'=>$ciudades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departamentos = Departamento::all();
        return view('basico.ciudades.create',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadRequest $request)
    {
        //
        $ciudad = new Ciudad;
        $ciudad->nombre = $request->nombre;
        $ciudad->codigo_dane = $request->codigo_dane;
        $ciudad->observacion = $request->observacion;
        $ciudad->departamento_id = $request->departamento_id;
        $ciudad->estado = $request->estado;
        $ciudad->user_created_at = \Auth::user()->id;
        $ciudad->save();

        return redirect()->route('ciudades.index')->with('info','La ciudad fue registrada con éxito');
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
        $ciudad = Ciudad::find($id);
        $departamentos = Departamento::all();
        return view('basico.ciudades.show',['ciudad'=>$ciudad,'departamentos'=>$departamentos]);
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
    public function update(CiudadRequest $request, $id)
    {
        //
        $ciudad = Ciudad::find($id);
        $ciudad->nombre = $request->nombre;
        $ciudad->codigo_dane = $request->codigo_dane;
        $ciudad->observacion = $request->observacion;
        $ciudad->departamento_id = $request->departamento_id;
        $ciudad->estado = $request->estado;
        $ciudad->user_updated_at = \Auth::user()->id;
        $ciudad->save();

        return redirect()->route('ciudades.index')->with('info','La ciudad fue actualizada con éxito');
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

    public  function ajaxCiudadesPais(Request $request){

        $ciudades = DB::table('ciudades')->select("ciudades.*")
            ->join('departamentos as dep', 'ciudades.departamento_id','=','dep.id')
            ->join('paises as pais', 'dep.pais_id','=','pais.id')
            ->where('pais.id','=',$request->pais)
            ->orderBy('ciudades.nombre','ASC')
            ->get();

        return response()->json([
            'ciudades' => $ciudades,
        ]);
    }
}
