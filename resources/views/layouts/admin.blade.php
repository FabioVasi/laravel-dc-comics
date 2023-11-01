<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin @yield('title', 'Comic Shop')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="{{route('home')}}" aria-current="page">HOME</a>
                <a class="nav-item nav-link" href="{{route('comics.index')}}">COMICS</a>
            </div>
        </nav>
    </header>

    <main id="site_main" class="min-vh-100">
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>