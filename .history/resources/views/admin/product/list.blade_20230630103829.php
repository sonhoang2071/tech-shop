@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    @if (session('msg'))
        <div class="alert allert-succes">{{session('msg')}}</div>
    @endif
@endsection
