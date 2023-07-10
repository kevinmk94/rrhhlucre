<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trabajadore;
use App\Models\Regimene;
use App\Models\Cargo;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $trabajadores = Trabajadore::with('Cargos','Regimenes')->paginate(10);
        return view('admin.trabajadores.index', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regimenes= Regimene::all();
        $cargos= Cargo::all();
        $trabajadores= Trabajadore::all();
        return view('admin.trabajadores.nuevo',compact('trabajadores', 'regimenes','cargos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre_regimen=Trabajadore::create([

            'dni'=>$request->dni,
            'nombres'=>$request->nombres,
            'apellido_p'=>$request->apellido_p,
            'apellido_m'=>$request->apellido_m,
            'cargos_id'=>$request->cargos_id,
            'regimenes_id'=>$request->regimenes_id,

        ]);

        return redirect()->action('App\Http\Controllers\Admin\TrabajadoresController@index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
