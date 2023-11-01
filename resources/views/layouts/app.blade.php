<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header id="site_header" class="">

        <div class="top-header mb-3">

            <div class="container d-flex justify-content-end align-items-center">
                <h6 class="text-white m-0">
                    DC POWER⁵ᴹ VISA®
                </h6>
                <div class="dropdown d-flex justify-content-end align-items-center">
                    <a class="btn fs-6 fw-bold py-0 text-white border-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADDITIONAL DC SITES
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="bottom-header d-flex justify-content-between align-items-center">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    
                    <div>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
                        </a>
                    </div>

                    <div class="">
                        <ul class="text-muted list-unstyled d-flex justify-content-evenly align-items-center">
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">CHARACTERS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">COMICS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">MOVIES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">TV</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">GAMES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">COLLECTIBLES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">VIDEOS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">FANS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">NEWS</a>
                            </li>
                            <li class="px-2">
                                <div class="dropdown d-flex justify-content-end align-items-center">
                                    <a class="btn text-muted fs-5 fw-bold p-0 border-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SHOP
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <form class="d-flex justify-content-center align-items-center" action="POST">
                            <input class="search border-0" type="text" id="search" placeholder="Search">
                            <button class="border-0 bg-transparent" type="submit">
                                <svg class="search-lens" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <main id="site_main" class="">
        @yield('content')
    </main>

</body>

</html>