<?php

namespace App\Http\Controllers;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }
    public function create()
    {
        return view('viajes.create');
    }
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
        return redirect()->route('viaje.index');
    }
    public function show(string $id)
    {
        $viaje = Viaje::findOrFail($id);
        return view('viajes.show', compact('viaje'));
    }
    public function edit(Viaje $viaje)
    {
        return view('viajes.edit', compact('viaje'));
    }
    public function update(Request $request, string $id)
    {
        
        $viaje = Viaje::findOrFail($id);
        $viaje->update($request->all());
        return redirect()->route('viaje.index');
    }
    public function destroy(string $id)
    {
        $viaje = Viaje::findOrFail($id);
        $viaje->delete();
        return redirect()->route('viaje.index');
    }
}
