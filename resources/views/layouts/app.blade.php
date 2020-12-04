<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-green-100 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>

                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline text-gray-900">
                        <svg width="58" height="40" viewBox="0 0 58 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="58" height="64" rx="5" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(-0.013538) scale(0.00263353 0.00238663)" />
                                </pattern>
                            </defs>
                        </svg>
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                    <a class="no-underline hover:underline text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline text-gray-900" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
        </header>
<<<<<<< HEAD
        <main>
=======
         <section id="inicio">
            <div class="mr-0 ">
                <img src={{ asset('img/f5events.jpeg') }} class="md:w-full ">
                <h1 class="z-1"> f5@Events </h1>
            </div>
            <div class="boton">
                <a href="">LEARN MORE</a>
            </div>
        </section> 
                    
>>>>>>> 4163415ffba5346dbfa658f5d15865d1d4135a83
            @yield('content')
        </main>
    </div>
</body>

</html>