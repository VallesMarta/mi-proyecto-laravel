@extends('viajes.layouts.landing')
@section('title', 'Crear Viaje')
@section('header')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Crear Nuevo Viaje</h1>
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('viaje.store') }}" id="formeditcreate" method="POST">
            @csrf
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ej: París" required>
            </div>
            <div class="form-group">
                <label for="duracion">Duración (días):</label>
                <input type="number" id="duracion" name="duracion" placeholder="Ej: 5" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio (€):</label>
                <input type="number" id="precio" name="precio" placeholder="Ej: 500" required>
            </div>
            <div class="form-group">
                <label for="imagen">Enlace de la imagen (URL):</label>
                <input type="text" id="imagen" name="imagen" placeholder="https://..." required>
            </div>
            <div class="form-group">
                <label for="enlace">Enlace para visitar:</label>
                <input type="text" id="enlace" name="enlace" placeholder="https://wikipedia.org/..." required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del viaje:</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe el destino..." required></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-blue">Guardar Viaje</button>
                <a href="{{ route('viaje.index') }}" class="btn btn-red">Cancelar</a>
            </div>
        </form>
    </div>
@endsection