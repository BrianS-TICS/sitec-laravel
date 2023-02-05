@extends('layout.app')

@section('titulo')
    Configuración
@endsection

@section('contenido')
    <form action="{{ route('settings.store') }}" method="POST" class="flex flex-col max-w-2xl mx-auto mt-10">
        @csrf
        <label for="email">Correo electronico</label>
        <input type="text" name="email" id="email" class="my-5 bg-slate-100 rounded-md p-2" placeholder="Escribe tu correo">
        <button type="submit" class="btn bg-blue-500 rounded-md py-2 font-bold text-white">Guardar configuracion</button>
    </form>
@endsection
