<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $viaje = new Viaje();
        $viaje->ciudad = $request->input('ciudad');
        $viaje->duracion = $request->input('duracion');
        $viaje->precio = $request->input('precio');
        $viaje->imagen = $request->input('imagen');
        $viaje->descripcion = $request->input('descripcion');
        $viaje->enlace = $request->input('enlace');
        $viaje->save();

        // Redirigir a la lista de notas
        return redirect()->route('viaje.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $viaje = Viaje::findOrFail($id);
        return view('viajes.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        return view('viajes.edit', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $viaje = Viaje::findOrFail($id);
        $viaje->update($request->all());
        return redirect()->route('viaje.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $viaje = Viaje::findOrFail($id);
        $viaje->delete();
        return redirect()->route('viaje.index');
    }
}
