@extends('viajes.layouts.landing')

@section('title', 'Editar Viaje')

@section('header')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Editar Viaje: {{ $viaje->ciudad }}</h1>
@endsection

@section('content')
    <div class="container"> 
        <form action="{{ route('viaje.update', $viaje->id) }}" id="formeditcreate" method="POST">
            @csrf
            @method('PUT') <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" value="{{ $viaje->ciudad }}" required>
            </div>

            <div class="form-group">
                <label for="duracion">Duración (días):</label>
                <input type="number" id="duracion" name="duracion" value="{{ $viaje->duracion }}" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio (€):</label>
                <input type="number" id="precio" name="precio" value="{{ $viaje->precio }}" required>
            </div>

            <div class="form-group">
                <label for="imagen">Enlace de la imagen (URL):</label>
                <input type="text" id="imagen" name="imagen" value="{{ $viaje->imagen }}" required>
            </div>

            <div class="form-group">
                <label for="enlace">Enlace para visitar:</label>
                <input type="text" id="enlace" name="enlace" value="{{ $viaje->enlace }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del viaje:</label>
                <textarea id="descripcion" name="descripcion" rows="4" required>{{ $viaje->descripcion }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-blue">Actualizar Viaje</button>
                <a href="{{ route('viaje.index') }}" class="btn btn-red">Cancelar</a>
            </div>
        </form>
    </div>
@endsection