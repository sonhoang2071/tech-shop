<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">
        <div class="row" style="width: 100%;height: 100%;">
            <div class="col-2">
                @include('admin.layouts.sidebar')
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</html>
