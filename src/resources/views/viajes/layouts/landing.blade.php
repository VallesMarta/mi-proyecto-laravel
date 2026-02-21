<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @include('_partials.nav')
        @yield('header')
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    
        @include('_partials.footer')
    
</body>
</html>