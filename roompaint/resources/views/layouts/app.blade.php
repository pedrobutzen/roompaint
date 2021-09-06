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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="{{ $body_class ?? '' }}">
    <div id="app">
        <header class="bg-white shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo da Room Paint">
                </a>

                <x-stepper class="d-flex" />

                @auth
                    <div class="user-logged">
                        {{ Auth::user()->email }}
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endauth
            </div>
        </header>

        <main>
            @yield('content')
        </main>
        
        @include('flash::message')
    </div>
</body>
</html>
