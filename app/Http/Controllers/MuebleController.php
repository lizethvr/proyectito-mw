<?php

namespace App\Http\Controllers;

use App\Models\mueble;
use Illuminate\Http\Request;
use App\Models\tipo;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $muebles = mueble::all();
        return view("muebleIndex", compact("muebles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view("muebleCreate", compact("tipos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mueble = new Mueble();
        $mueble->nombre= $request->nombre;
        $mueble->precio= $request->precio;
        $mueble->cantidad= $request->cantidad;
        $mueble->save();
        $mueble->tipos()->attach($request->tipos);
        return redirect('/mueble');
    }

    /**
     * Display the specified resource.
     */
    public function show(mueble $mueble)
    {
        return view('muebleShow', compact('mueble'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mueble $mueble)
    {
        $tipos = Tipo::all();
        return view('muebleEdit', compact('mueble', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mueble $mueble)
    {
        
        $mueble->nombre= $request->nombre;
        $mueble->precio= $request->precio;
        $mueble->cantidad= $request->cantidad;
        $mueble->save();
        $mueble->tipos()->sync($request->tipos);
        return redirect('/mueble/'. $mueble->id);
    }

    public function destroy(mueble $mueble)
    {
        $mueble->delete();
        return redirect('/mueble');
    }
}
