<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <main>
       <div class="row">
        <div class="col-4 w-100" style="background-color: red; height:100px"></div>
        <div class="col-8 w-100" style="background-color: blue; height:100px"></div>
       </div>
    </main>
</body>
<script src="{{asset('assets/js/javascript.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</html>
