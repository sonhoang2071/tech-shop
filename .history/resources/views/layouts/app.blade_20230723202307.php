<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
    <header style="position: fixed; width : 100%; margin-bottom:120px; top : 0;z-index:3;" class="shadow" >
        @include('client.header')
    </header>
    <main>
        <div id="app" class="container" style="margin-top: 100px; margin-bottom:100px">
            @yield('content')
        </div>
    </main>

    <style>
        li#sonhoang2071:hover div#menuUser{
            display: block;
        }
    </style>
</body>
</html>
