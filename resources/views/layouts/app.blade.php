<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Ux-Camp') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <body>
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Uxcamp') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Create   <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        @if (Auth::check())
                                                  <a class="dropdown-item" href="/cliente/create">Crear Cliente</a>
                                                  <a class="dropdown-item"  href="/empresa/create">Crear Empresa</a>
                                                  @else
                                                  @endif
                                                </div>
                                              </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              List   <i class="fas fa-list-ul"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="/user">User List   <i class="fas fa-user"></i></a>
                                              <a class="dropdown-item" href="/cliente">Client List </a>
                                              <a class="dropdown-item" href="/cliente/card">Client List card <i class="fas fa-id-card"></i></a>
                                              <a class="dropdown-item" href="/empresa">Empresa List  <i class="fas fa-user-tie"></i> </a>
                                            </div>
                                          </li>
                                        
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
            
                    <main class="container">
                        @yield('content')
                    </main>
                </div>
            </body>
</html>
