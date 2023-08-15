@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert allert-succes">{{session('msg')}}</div>
        @endif
        <h1>{{$title}}</h1>
        <hr>

    </div>
@endsection
