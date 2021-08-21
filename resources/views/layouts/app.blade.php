<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yosephus Wahyu Eko Novianto, S.Kom" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('img/gk.ico') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #topbar-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #05ab08;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        #alert-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #e3342f;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        .bc {
            background-image: url('img/bcfix.png');
        }

    </style>
</head>

<body class="bc">

    <div id="topbar-notification">
        <div class="container">
            <div id="text-notif">
                My awesome top bar
            </div>
        </div>
    </div>

    <div id="alert-notification">
        <div class="container">
            <div id="alert-notif">
                My awesome top bar
            </div>
        </div>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest

                    @else
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.diskusi') }}" class="nav-link">Diskusi</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Piagam</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Karya
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                        Cernak
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Komik
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Pictbook
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Puisi & Pantun
                                    </a>
                                </div>
                            </li>
                        </ul>
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <script>
            function showNotif(text) {

                $('#text-notif').html(text);
                $('#topbar-notification').fadeIn();

                setTimeout(function() {
                    $('#topbar-notification').fadeOut();
                }, 2000)
            }

            function showAlert(text) {

                $('#alert-notif').html(text);
                $('#alert-notification').fadeIn();

                setTimeout(function() {
                    $('#alert-notification').fadeOut();
                }, 2000)
            }
        </script>

        @if (!empty(Session::get('status')) && Session::get('status') == '1')
            <script>
                showNotif("{{ Session::get('message') }}");
            </script>
        @endif

        @if (!empty(Session::get('status')) && Session::get('status') == '2')
            <script>
                showAlert("{{ Session::get('message') }}");
            </script>
        @endif
    </div>
</body>


</html>
