<!doctype html>
<html class="no-js h-100" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Soluciones Financiera - @yield('title')</title>
        <meta name="description"
            content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('styles/shards-dashboards.1.1.0.min.css')}}">
        <link rel="stylesheet" href="{{asset('styles/extras.1.1.0.min.css')}}">
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <link rel="stylesheet" href="{{asset('styles/me.css')}}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    </head>
    <body class="h-100">
        <div class="container-fluid">
            <div class="row">
                <!-- Main Sidebar -->
                <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                    <div class="main-navbar">
                        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                            <a class="navbar-brand w-100 mr-0" href="/" style="line-height: 25px;">
                                <div class="d-table m-auto">
                                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                                        src="{{asset('images/shards-dashboards-logo.svg')}}" alt="Shards Dashboard">
                                    <span class="d-none d-md-inline ml-1">Soluciones Financiera</span>
                                </div>
                            </a>
                            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                            </a>
                        </nav>
                    </div>
                    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <input class="navbar-search form-control" type="text" placeholder="Buscar un empleado o cliente"
                                aria-label="Search">
                        </div>
                    </form>
                    <div class="nav-wrapper">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="/admin">
                                <i class="material-icons">warning</i>
                                <span>Administracion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/admin/usuarios">
                                <i class="material-icons">person</i>
                                <span>Usuarios</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/admin/creditos">
                                <i class="material-icons">money</i>
                                <span>Creditos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/admin/clientes">
                                <i class="material-icons">person</i>
                                <span>Clientes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- End Main Sidebar -->
                <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                    <div class="main-navbar sticky-top bg-white">
                        <!-- Main Navbar -->
                        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                                <div class="input-group input-group-seamless ml-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                    <input class="navbar-search form-control" type="text"
                                        placeholder="Buscar usuarios/clientes" aria-label="Search">
                                </div>
                            </form>
                            <ul class="navbar-nav border-left flex-row ">
                                <li class="nav-item border-right dropdown notifications">
                                    <a class="nav-link nav-link-icon text-center" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons">&#xE7FD;</i>
                                            <span class="badge badge-pill badge-danger">{{$customersWithDebt->count()}}</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu text-center dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-divider"></div>
                                        @foreach($customersWithDebt as $customerWithDebt)
                                            <a class="dropdown-item" href="">
                                                <i class="material-icons">&#xE7FD;</i>{{$customerWithDebt->fullname}} - {{$customerWithDebt->phone}}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2" src="{{asset('images/avatars/1.jpg')}}"
                                        alt="User Avatar">
                                    <span class="d-none d-md-inline-block">{{Auth::user()->name}}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-small">
                                        <a class="dropdown-item" href="/perfil">
                                            <i class="material-icons">&#xE7FD;</i> Perfil</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons text-danger">&#xE879;</i> Salir </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <nav class="nav">
                                <a href="#"
                                    class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                                    data-toggle="collapse" data-target=".header-navbar" aria-expanded="false"
                                    aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                                </a>
                            </nav>
                        </nav>
                    </div>
                    <!-- / .main-navbar -->
                    <div class="main-content-container container-fluid px-4">
                        @yield('content')
                    </div>
                    <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                        
                        <span class="copyright ml-auto my-auto mr-2">Inusual Software Industries 2019
                        <a href="" rel="nofollow">Fbook</a>
                        </span>
                    </footer>
                </main>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
        <script src="{{asset('scripts/extras.1.1.0.min.js')}}"></script>
        <script src="{{asset('scripts/shards-dashboards.1.1.0.min.js')}}"></script>
        <script src="{{asset('scripts/app/app-blog-overview.1.1.0.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        @yield('js')
    </body>
</html>

