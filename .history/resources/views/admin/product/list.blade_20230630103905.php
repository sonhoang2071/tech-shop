@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    @if (session('msg'))
        <div class="alert allert-succes">{{session('msg')}}</div>
    @endif
    <h1>List of Product</h1>
@endsection
