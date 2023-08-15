@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')

    <div class="container py-5">
            <div>
            <input type="text" placeholder="Tháng" onchange="datachange(this)">
            <canvas id="myChart"></canvas>
            </div>



    </div>
    
@endsection
