@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        <div class>
            @if (session('msg'))
                <div class="alert allert-succes">{{session('msg')}}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại !!!</div>
            @endif
        </div>
        <h1>{{$title}}</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="maSP" class="form-control w-50" placeholder="Mã sản phẩm...">
                @error('maSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tenSP" class="form-control w-50" placeholder="Tên sản phẩm...">
                @error('tenSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Số lượng</label>
                <input type="text" name="soLuong" class="form-control w-50" placeholder="Số lượng...">
                @error('soLuong')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Giá mua</label>
                <input type="text" name="giaMua" class="form-control w-50" placeholder="Giá mua...">
                @error('giaMua')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Giá bán</label>
                <input type="text" name="giaBan" class="form-control w-50" placeholder="Giá bán...">
                @error('giaBan')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhAnh" class="form-control w-25" >
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('admin.product.list')}}" class="btn btn-warning">Quay lại</a>
            @csrf
        </form>


    </div>
@endsection
