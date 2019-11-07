<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/argon.min.css') }}" rel="stylesheet">

    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ asset('vendor/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('css/argon.min.css?v=1.0.0') }}" type="text/css">
</head>
<body>
    <div id="app">
        @include('layouts.sidbar')
    <!-- Header -->
    <main class="py-4 container-fluid">
        @yield('content')
    </main>
</div>
<!-- Core -->
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<script src="{{ asset('vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('js/argon.min.js?v=1.0.0') }}"></script>
<!-- Demo JS - remove this in your project -->
<script src="{{ asset('js/demo.min.js') }}"></script>
</body>
</html>
