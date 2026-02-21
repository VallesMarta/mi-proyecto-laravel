@extends('viajes.layouts.landing')
@section('title', 'Viajes')
@section('header')
    <h1>Agencia de Viajes - CRUD</h1>
@endsection
@section('content')
    <div class="viajes-grid">
    @forelse ($viajes as $viaje)
            <x-card
                ciudad="{{ $viaje->ciudad }}"
                imagen="{{ $viaje->imagen }}"
                precio="{{ $viaje->precio }}"
                duracion="{{ $viaje->duracion }}"
                descripcion="{{ $viaje->descripcion }}"
                enlace="{{ $viaje->enlace }}"
                id="{{ $viaje->id }}">
            </x-card>
            
        @empty
            <p>No hay viajes disponibles.</p>
        @endforelse
    </div>
@endsection