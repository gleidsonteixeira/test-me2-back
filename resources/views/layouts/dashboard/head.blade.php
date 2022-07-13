<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('titulo')</title>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('assets/site/images/favicon.png')}}">
    <!-- css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;800&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs.min.css">
    <link rel="stylesheet" href="{{asset('assets/site/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">

    <!-- scripts -->
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/js/mask.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/all.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/datatables.min.js"></script>
    
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <i class="material-icons click suave menu-btn">menu</i>
                <a href="/dashboard">
                    <img src="{{ asset('assets/site/images/logo_nillink.png') }}" alt="Nillink">
                </a>
            </div>
            <div class="perfil">
                @if(Auth::user()->perfil->perfil_imagem == null)
                    {{ Auth::user()->name[0] }}
                @else
                    <img src="{{ asset('assets/admin/images/perfis/'.Auth::user()->perfil->perfil_imagem) }}" alt="{{ Auth::user()->name }}">
                @endif
                <div class="nome">
                    <h6 class="laranja1">Bem-vindo</h6>
                    <h3>{{ Auth::user()->name }}</h3>
                    <a href="/conta/{{ Auth::user()->apelido }}" target="_blank">{{ Auth::user()->apelido }}</a>
                </div>
            </div>
            <ul>
                <li class="@if(Route::currentRouteName() == 'dashboard') active @endif">
                    <i class="material-icons suave">home</i>
                    <a class="suave" href="/dashboard">Início</a>
                </li>
                <!-- <li>
                    <a class="suave" href="/dashboard/perfis">
                        <i class="material-icons suave">group</i> Perfis
                    </a>
                </li> -->
                <li>
                    <i class="material-icons suave">logout</i>
                    <a class="suave" href="/logout">Sair</a>
                </li>
            </ul>
        </nav>
    </header>