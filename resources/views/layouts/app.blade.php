<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Despacho Jurídico')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <h1>⚖️ Sistema del Despacho Jurídico</h1>
</header>

<div class="container">
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
