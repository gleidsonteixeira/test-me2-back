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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap">
    <link rel="stylesheet" href="{{asset('assets/site/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/site.css')}}">
    <!-- scripts -->
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/js/mask.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
    <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>