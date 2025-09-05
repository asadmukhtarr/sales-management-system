<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Font Awesome 4 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                      @if(Auth::check())
                       <!-- Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fa fa-tachometer"></i> Dashboard
                            </a>
                        </li>

                        <!-- Products -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productsMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cubes"></i> Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="productsMenu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.products') }}">
                                        <i class="fa fa-list"></i> All Products
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.products.create') }}">
                                        <i class="fa fa-plus"></i> Create Product
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.categories') }}">
                                        <i class="fa fa-list"></i> Categories
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Sales -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="salesMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-shopping-cart"></i> Sales
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="salesMenu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.sales') }}">
                                        <i class="fa fa-list-alt"></i> All Sales
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.new.sales') }}">
                                        <i class="fa fa-cart-plus"></i> New Sale
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Users -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">
                                <i class="fa fa-users"></i> Users
                            </a>
                        </li>

                        <!-- Analytics -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('analytics') }}">
                                <i class="fa fa-bar-chart"></i> Analytics
                            </a>
                        </li>
                        <!-- Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accountMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountMenu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user-circle"></i> Dashboard
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <!-- Logout -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>


                      @else 
                       <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                      @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
</body>
</html>
