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
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tenSP" class="form-control" placeholder="Tên sản phẩm...">
            </div>
            <div class="mb-3">
                <label for="">Số lượng</label>
                <input type="text" name="soLuong" class="form-control" placeholder="Số lượng...">
            </div>
            <div class="mb-3">
                <label for="">Giá mua</label>
                <input type="text" name="giaMua" class="form-control" placeholder="Giá mua...">
            </div>
            <div class="mb-3">
                <label for="">Giá bán</label>
                <input type="text" name="giaBan" class="form-control" placeholder="Giá bán...">
            </div>
            <div class="mb-5">
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhAnh" class="form-control w-25" >
            </div>
            @csrf
        </form>


    </div>
@endsection
