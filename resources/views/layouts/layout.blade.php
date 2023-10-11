<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') {{ '| ' . config('app.name', 'School Mnagement System') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ static_asset('assets/img/favicon.png') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/fonts/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/style.css') }}">
    <!-- Modernize js -->
    {{-- <script src="{{ static_asset('assets/js/modernizr-3.6.0.min.js')}}"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->

    @yield('content')
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="{{ static_asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ static_asset('assets/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ static_asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ static_asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ static_asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ static_asset('assets/js/main.js') }}"></script>
    @include('partials._message')
</body>

</html>
