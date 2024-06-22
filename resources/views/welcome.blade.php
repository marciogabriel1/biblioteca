<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="antialiased">
        
        </div>
        <header>
        <div class="container">
            <div class="header-left">
                <h1 class="site-title">Biblioteca Online</h1>
            </div>
            <div id="header-right" class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar-se</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </header>
    <main>
        <section class="intro">
            <div class="container">
                <h2>Bem-vindo à Biblioteca Online</h2>
                <p>Guarde uma vasta coleção de livros de todos os gêneros e autores. Aqui você podera guardar todos os tipos de livros desde os clássicos da literatura até os lançamentos mais recentes. Aproveite a sua propria biblioteca privada para explorar novos mundos e expandir seus horizontes.</p>
            </div>
        </section>
    </main>
    </body>
</html>
