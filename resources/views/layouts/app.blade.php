<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Despacho Jurídico')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<header class="app-header">
    <div class="header-inner">
        <h1 class="logo">
            ⚖️ <span>Despacho Jurídico</span>
        </h1>

        <nav class="main-nav">
            <a href="{{ route('abogados.index') }}">Abogados</a>
            {{-- después: clientes, casos, etc --}}
        </nav>
    </div>
</header>

<main class="container">
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

<footer class="app-footer">
    <small>© {{ date('Y') }} Despacho Jurídico · Sistema interno</small>
</footer>

</body>
</html>
