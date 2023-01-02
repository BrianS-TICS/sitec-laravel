@extends('layout.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
    <h1 class="font-black text-3xl text-center mb-6">Registro de usuarios</h1>

    <form class="md:w-1/3 p-4 bg-slate-200 rounded-md mx-auto" action="{{ route("register.store") }}" method="POST">
        @csrf
        <label class="block font-semibold mb-1" for="numero_control">Numero de control</label>
        <input id="numero_control"
            class="mb-2 w-full px-2 py-1 rounded-md @error('numero_control') border border-red-500 @enderror"
            name="numero_control" type="number" value="{{ old('numero_control') }}" placeholder="Numero de control">

        @error('numero_control')
            <p class="bg-red-500 text-white mb-1 rounded-md text-sm p-2 text-center font-bold">{{ $message }}</p>
        @enderror

        <label class="block font-semibold" for="password">Contraseña</label>
        <input id="password" class="mb-4 w-full px-2 py-1 rounded-md  @error('password') border border-red-500 @enderror"
            name="password" type="password" placeholder="Contraseña">

        @error('password')
            <p class="bg-red-500 text-white mb-1 rounded-md text-sm p-2 text-center font-bold">{{ $message }}</p>
        @enderror

        <label class="block font-semibold" for="password">Confirmar contraseña</label>
        <input id="password_confirmation" class="mb-4 w-full px-2 py-1 rounded-md  @error('password') border border-red-500 @enderror"
            name="password_confirmation" type="password" placeholder="Confirmar contraseña">

        @error('password_confirmation')
            <p class="bg-red-500 text-white mb-1 rounded-md text-sm p-2 text-center font-bold">{{ $message }}</p>
        @enderror

        <input type="submit"
            class="block font-semibold bg-slate-800 text-white w-full py-2
                    mx-auto mt-4 rounded-sm hover:cursor-pointer
                    hover:bg-slate-700"
            value="Registrar">
    </form>
@endsection
