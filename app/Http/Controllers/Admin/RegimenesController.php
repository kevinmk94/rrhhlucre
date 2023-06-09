<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regimene;

class RegimenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regimenes= Regimene::orderBy('id','DESC')->paginate(10);
        return view('admin.regimenes.index',compact('regimenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regimenes= Regimene::orderBy('id','DESC')->paginate(10);
        return view('admin.regimenes.nuevo',compact('regimenes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre_regimen=Regimene::create([
            'nombre_regimen'=> $request->nombre_regimen,
        ]);

        return redirect()->action('App\Http\Controllers\Admin\RegimenesController@index');
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
