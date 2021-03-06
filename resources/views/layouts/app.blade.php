<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
    <head>


            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ciência da Computação</title>
        <meta name="description" content="Curso de Ciencias da Computação">
        <meta name="keywords" content="ciencias da computação, facape,  ">
        <meta name="robots" content="index, follow">
        <meta name="author" content="">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap-css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap-css/bootstrap-grid.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap-css/bootstrap-reboot.css')}}">

        <!-- MY CSS-->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('https://use.fontawesome.com/releases/v5.0.10/css/all.css')}}">

        <!-- Icons-->
        <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}">

        <link rel="icon" href="{{ URL::asset('img/computacao-logo.png')}}">
    </head>
    <body>
        <!-- NAVBAR -->
        <!-- NAVBAR -->
        <div class="head fixed-top">
            <div class="logo-container">
                <a href="/" title="Curso de Ciencia da Computação"> <h1 class="logo">Ciência da Computação</h1> </a>
            </div>
            <ul class="links nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sobre o Curso
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/info">Informações</a>
                        <a class="dropdown-item" href="http://sistemas.facape.br:8080/portalaluno/horarios.do" target="_blank">Horários</a>
                        <a class="dropdown-item" href="http://sistemas.facape.br:8080/vestibular/home.do" target="_blank">Vestibular</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projetos">Projetos de Extensão</a>
                </li>
            @guest

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu border-0" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/home">Aluno</a>
                            <a class="dropdown-item" href="/prof">Professor</a>
                            <a class="dropdown-item" href="/admin">Administrador</a>
                        </div>
                    </li>

                @else

                        <li class="nav-item"><a class="nav-link disabled" href="#"><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->name }}</a></li>

                        <li class="nav-item"><a class="nav-link"  href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-user"></span> {{ __('Sair') }}
                            </a></li>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
            </ul>


            @endguest
        </div>
         <br> <!-- Espaços do topo -->
            <br>
            <br>
        <div>@yield('content')</div> <!--meio da pagina-->




        <!-- JQUERY (não deu certo por enquanto) -->
        <!--
        <script src="js/Jquery.js"></script>
        -->
        <!-- BOOTSTRAP JS (não deu certo por enquanto) -->
        <!--
        <script src="bootstrap-js/bootstrap.js"></script>
        <script src="bootstrap-js/bootstrap.js.map"></script>
        <script src="bootstrap-js/bootstrap.bundle.js"></script>
        <script src="bootstrap-js/bootstrap.bundle.js.map"></script>
         -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>

    </body>
</html>
