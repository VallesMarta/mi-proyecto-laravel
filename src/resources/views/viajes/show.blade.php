@extends('viajes.layouts.landing')

@section('title', 'Detalle del Viaje')

@section('content')
    <x-card
        :ciudad="$viaje->ciudad"
        :imagen="$viaje->imagen"
        :precio="$viaje->precio"
        :duracion="$viaje->duracion"
        :descripcion="$viaje->descripcion"
        :enlace="$viaje->enlace"
        :id="$viaje->id"
    />

    <a href="{{ route('viaje.index') }}" class="btn volver-btn">Volver</a>
@endsection