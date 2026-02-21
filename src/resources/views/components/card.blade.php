@props(['ciudad', 'imagen', 'descripcion', 'duracion', 'precio', 'enlace', 'id'])

<div class="card">
    <div class="card-image">
        <img src="{{ asset($imagen) }}" alt="Imagen de {{ $ciudad }}">
    </div>

    <div class="card-content">
        <a href="{{ route('viaje.show', $id) }}" class="card-title">
            <h2>{{ $ciudad }}</h2>
        </a>
        
        <p class="card-description">{{ $descripcion }}</p>
        
        <div class="card-info">
            <span class="info-duracion"><strong>Duración:</strong> {{ $duracion }} días</span>
            <span class="info-precio">{{ $precio }} €</span>
        </div>

        <a href="{{ $enlace }}" target="_blank" class="card-link">Más información</a>

        <div class="card-actions">
            <a href="{{ route('viaje.edit', $id) }}" class="btn btn-edit">Editar</a>
            
            <form action="{{ route('viaje.destroy', $id) }}" method="POST" class="form-delete">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete" onclick="return confirm('¿Estás seguro?')">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>