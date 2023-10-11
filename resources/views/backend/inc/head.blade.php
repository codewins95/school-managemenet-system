<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') {{ '| ' . config('app.name', 'School Mnagement System') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Favicon -->
    <link rel="shortcut icon" href="{{ static_asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ static_asset('assets/img/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ static_asset('assets/img/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ static_asset('assets/img/favicon.png') }}" />

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/style.css')}}">

    <!-- Csn css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

    <!-- Modernize js -->
    {{-- <script src="{{ static_asset('assets/js/modernizr-3.6.0.min.js')}}"></script> --}}
    @stack('post_styles')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
