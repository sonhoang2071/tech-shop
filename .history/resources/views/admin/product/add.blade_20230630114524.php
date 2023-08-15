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
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="maSP" class="form-control" placeholder="Mã sản phẩm...">
            </div>
            @csrf
        </form>


    </div>
@endsection
