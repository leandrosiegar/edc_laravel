<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El Despotricador Cinéfilo</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/mainEDC.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/styleEDC.css') !!}" rel="stylesheet">
</head>
<body>

{{app()->setLocale(session()->get('language'))}}

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <img src="{!! asset('images/granlogo_edc_10.jpg') !!}">
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.peliculas')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.youtube-pel-list')}}">@lang('messages.listar_peliculas')</a></li>
                    <li><a href="{{route('front.criticas-list')}}">@lang('messages.listar_criticas')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.cineastas')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.youtube-cineastas-list')}}">@lang('messages.listar_cineastas')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sliders
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.sliders-list')}}">Sliders</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.qgeec')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.garci-list')}}">@lang('messages.listar_coloquios')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.qgeec')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.garci-list')}}">@lang('messages.listar_coloquios')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.doblaje')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.doblaje-list')}}">@lang('messages.listar_doblajes')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.noesmusica')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.noesmusica-list')}}">@lang('messages.listar_noesmusica')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.documental')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('front.documental-list')}}">@lang('messages.listar_documentales')</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('messages.cambiar_idioma')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0);" onclick="switchLang('es');">ESP</a></li>
                    <li><a href="javascript:void(0);" onclick="switchLang('en');">ING</a></li>
                </ul>
            </li>

            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/youtube') }}" target="_blank">Intranet</a></li>
                @else
                    <li><a href="{{ route('login') }}" target="_blank">@lang('messages.identificarse')</a></li>
                    <li><a href="{{ route('register') }}" target="_blank">@lang('messages.registrarse')</a></li>
                @endauth
            @endif

        </ul>
    </div>
</nav>
<div></div>