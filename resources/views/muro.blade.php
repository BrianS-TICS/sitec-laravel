@extends('layout.app')

@section('titulo')
    Muro
@endsection

@section('contenido')
    <h1 class="text-4xl font-black">Muro</h1>

    <h2 class="text-2xl">Numero de control</h2>
    <h3 class="text-2xl">
        @if (auth()->user()->rol === 1)
            Estudiante
        @else
            Empleado
        @endif

        {{ auth()->user()->numero_control }}
    </h3>
@endsection
