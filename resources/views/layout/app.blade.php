<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/images/tecnmicono.ico">
    <title>Sitec | @yield('titulo')</title>

    @stack('styles')
    @stack('scripts')

    @vite('resources/css/app.css')

</head>

<body>
    <header class="container md:max-w-5xl mx-auto mt-5">
        <section class="grid grid-cols-2  md:grid-cols-3">
            <img class="hidden md:block mr-auto" src="/images/LogoTNM.png" alt="Logo TNM">
            <img class="max-h-32 mx-auto" src="/images/LogoTecNM_Horizontal.svg" alt="Logo tec nacional de mexico">
            <img class="ml-auto" src="/images/Logo-itc.png" alt="Logo itc">
        </section>

        @guest
            <nav class="mt-5 bg-slate-200 rounded-md border-b-gray-200 border-b-2">
                <ul class="flex justify-center gap-1">
                    <li class="bg-gray-700 w-full rounded-md">
                        <a class="font-bold block w-full text-center p-3 text-gray-200" href="">Inicio</a>
                    </li>
                </ul>
            </nav>
        @endguest

        @auth
            <nav class="mt-5 bg-slate-200 rounded-md border-b-gray-200 border-b-2">
                <ul class="flex justify-around">
                    <li class="bg-gray-700 w-full rounded-l-md">
                        <a class="font-bold p-3 text-gray-200 block text-center w-full" href="{{route('inicio')}}">Mi muro</a>
                    </li>
                    <li class=" hover:bg-gray-700 flex w-full">
                        <a class="font-bold text-gray-700 p-3 hover:text-gray-200 block text-center w-full"
                            href="/reinscripción">Reinscripción</a>
                    </li>
                    <li class=" hover:bg-gray-700 flex w-full">
                        <a class="font-bold text-gray-700 p-3 hover:text-gray-200 block text-center w-full"
                            href="">Avance de ciclo</a>
                    </li>
                    <li class=" hover:bg-gray-700 flex w-full">
                        <a class="font-bold text-gray-700 p-3 hover:text-gray-200 block text-center w-full"
                            href="">Configurar cuenta</a>
                    </li>
                    <li class=" hover:bg-gray-700 flex w-full rounded-r-md">
                        <form class="w-full" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="font-bold text-gray-700 p-3 hover:text-gray-200 block text-center w-full">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        @endauth

    </header>
    <main class="container md:max-w-5xl mt-5 mx-auto">
        @yield('contenido')
    </main>

    <footer class="container md:max-w-5xl mx-auto py-10 md:mt-20">
        <p class="text-center">
            Instituto Tecnológico de Culiacán
            Av. Juan de Dios Bátiz 310 Pte. Col. Guadalupe. Culiacán, Sinaloa. C.P. 80220 Teléfono: +52 (667) 454-0100
            Tecnológico Nacional de México – Algunos derechos reservados © 2014-2021
        </p>
        <p class="text-center">
            Política de Privacidad
        </p>
    </footer>
</body>

</html>
