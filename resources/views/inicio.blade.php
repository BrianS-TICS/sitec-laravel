@extends('layout.app')

@push('styles')
    {{-- Pendiente --}}
    <link rel="stylesheet" href="../css/custom/helpers.css" type="text/css">
@endpush

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="md:pb-36">
        <div class="md:flex gap-5">
            <section class="md:w-2/3">
                <h1 class="text-4xl font-black">Bienvenidos a SITEC</h1>
                <p class="mt-2">
                    Para acceder, usa el Número de Control con la clave correspondiente. Una vez que hayas entrado, presiona
                    en
                    el menú superior "Reinscripción" para que inicies el procedimiento. Recuerda que podrás ingresar para
                    reinscribirte a partir de la hora y fecha asignada, hasta antes del día de cierre de reinscripciones.
                </p>
                <p class="mt-2">En caso de tener algún problema durante el proceso, puedes documentarlo presionando
                    PRINTSCR en
                    tu teclado
                    (Windows) y pegarlo o insertar la imagen generada con CMD+SHIFT+3 (OSX) en un documento de texto con tus
                    comentarios y número de control. Para resolver cualquier inquietud si eres maestro pide ayuda al Jefe de
                    Docencia y si eres alumno pide ayuda en La División.</p>
            </section>
            {{-- Formulario de logeo --}}
            <form class="md:w-1/3 p-4 bg-slate-200 rounded-md" action="{{ route('inicio.store') }}" method="POST">
                @csrf
                <label class="block font-semibold mb-1" for="numero_control">Numero de control</label>
                <input
                    id="numero_control"
                    class="mb-2 w-full px-2 py-1 rounded-md @error('numero_control') border border-red-500 @enderror"     name="numero_control" type="number"
                    value="{{ old('numero_control') }}"
                    placeholder="Numero de control"
                >

                @error('numero_control')
                    <p class="bg-red-500 text-white mb-1 rounded-md text-sm p-2 text-center font-bold">{{ $message }}</p>
                @enderror

                <label class="block font-semibold" for="password">Contraseña</label>
                <input
                    id="password"
                    class="mb-4 w-full px-2 py-1 rounded-md  @error('password') border border-red-500 @enderror" name="password" type="password" placeholder="Contraseña"
                >

                @error('password')
                    <p class="bg-red-500 text-white mb-1 rounded-md text-sm p-2 text-center font-bold">{{ $message }}</p>
                @enderror

                <a class="text-center block text-blue-800 underline decoration-2" href="#">Recuperar contraseña</a>
                <input type="submit"
                    class="block font-semibold bg-slate-800 text-white w-full py-2
                            mx-auto mt-4 rounded-sm hover:cursor-pointer
                            hover:bg-slate-700"
                    value="Entrar">
            </form>
        </div>
        <section class="md:w-2/3">
            <h2 class="mt-4 pr-5">
                <span class="font-semibold">Durante las reinscripciones</span> puedes comunicarte a las
                líneas de
                <a class="inline items-center justify-center gap-1 underline decoration-1"
                    href="https://www.facebook.com/siteccln/">
                    soporte Técnico SITEC Culiacán
                </a>
                ó llama
                <a class="inline  underline decoration-1" href="https://www.facebook.com/siteccln/">
                    +52 (667) 454-0100 Ext.1151, 1152, 1153
                </a>
            </h2>
        </section>
    </div>
@endsection
