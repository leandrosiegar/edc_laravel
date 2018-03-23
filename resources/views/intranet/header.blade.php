<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
</head>
<body>

{{app()->setLocale(session()->get('language'))}}

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="#">INTRANET EDC {{ session()->get('language') }}</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sliders
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('sliders.create')}}">Añadir Slider</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">YouTube
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('youtube.create')}}">Añadir película a YouTube</a></li>
                    <li><a href="{{route('youtube.index')}}">Listar películas YouTube</a></li>
                    <li><a href="{{route('artYoutube.create')}}">Añadir cineasta a YouTube</a></li>
                    <li><a href="{{route('artYoutube.index')}}">Listar cineasta YouTube</a></li>
                    <li><a href="{{route('youtube.set-youtube')}}">Linkar vídeo YouTube con cineastas</a></li>
                    <li><a href="{{route('youtube.list-histyoutube')}}">Listar relaciones cineastas con youtube</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Qué grande es el cine
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('garci.create')}}">Añadir programa </a></li>
                    <li><a href="{{route('garci.index')}}">Listar  programas</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Doblaje
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('doblaje.create')}}">Añadir doblaje </a></li>
                    <li><a href="{{route('doblaje.index')}}">Listar doblajes </a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">No es música, es cine
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('noesmusica.create')}}">Añadir concierto </a></li>
                    <li><a href="{{route('noesmusica.index')}}">Listar conciertos </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Documentales
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('documental.create')}}">Añadir documental </a></li>
                    <li><a href="{{route('documental.index')}}">Listar documentales </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Colaborador
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('colaborador.create')}}">Añadir colaborador </a></li>
                    <li><a href="{{route('colaborador.index')}}">Listar colaboradores </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Críticas
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('criticas.create')}}">Añadir crítica </a></li>
                    <li><a href="{{route('criticas.index')}}">Listar críticas </a></li>
                </ul>
            </li>

            <!--
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cambiar idioma
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);" onclick="switchLang('es');">ESP</a></li>
                        <li><a href="javascript:void(0);" onclick="switchLang('en');">ING</a></li>
                </ul>
            </li>
            -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Salir
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>


            {{--
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Directores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('directores.create')}}">Añadir director</a></li>
                    <li><a href="{{route('directores.index')}}">Listar directores</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Actores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('actores.create')}}">Añadir actor</a></li>
                    <li><a href="{{route('actores.index')}}">Listar actores</a></li>
                </ul>
            </li>
            --}}
        </ul>
    </div>
</nav>



