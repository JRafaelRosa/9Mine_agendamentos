<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '9mine')</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark d-flex flex-column min-vh-100">

<header class="bg-black p-4">
    <nav class="w-100 d-flex justify-content-between align-items-center" aria-label="Navegação principal">

        <a class="nav-logo" href="{{ route('site.index') }}">
            <img class="img-fluid" src="{{ asset('img/logo.svg') }}" alt="logo 9Mine">
        </a>

        <ul class="nav gap-3 align-items-center text-white">
            <li class="nav-item"><a href="{{ route('site.index') }}" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="{{ route('site.agenda') }}" class="nav-link text-white">Agenda</a></li>
            <li class="nav-item"><a href="{{ route('site.contato') }}" class="nav-link text-white">Contato</a></li>
            <li class="nav-item"><a href="{{ route('site.sobreNos') }}" class="nav-link text-white">Sobre Nós</a></li>
            <li class="nav-item"><a href="{{ route('site.loja') }}" class="nav-link text-white">Loja</a></li>
            <li class="nav-item">
                <a href="{{ route('app.perfil') }}" class="nav-link text-white">
                    <i class="bi bi-person-circle text-white"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>

<main class="conteudo flex-grow-1">
    @yield('content')
</main>

<footer class="bg-black p-4 w-100">
    <div class="container">
        <p class="text-white text-center">Desenvolvido por &copy;9Mine 2025</p>
    </div>
</footer>

</body>
</html>
