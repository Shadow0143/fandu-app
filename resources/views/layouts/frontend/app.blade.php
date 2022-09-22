<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')

    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">

    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/slick.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">




</head>

@yield('css')

<body class="">
    @include('layouts.frontend.header')
    <main class="">
        @yield('content')
    </main>
    @include('layouts.frontend.footer')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>


    @yield('script')
</body>

</html>