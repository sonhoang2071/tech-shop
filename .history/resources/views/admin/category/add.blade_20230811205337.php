@extends('admin.layouts.master')

@section('content')
    <div class="container py-5">
        <div class>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại !!!</div>
            @endif
        </div>
        <h1>{{$title}}</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="maSP" class="form-control w-50" placeholder="Mã sản phẩm..." value="{{old('maSP')}}">
                @error('maSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="maSP" class="form-control w-50" placeholder="Mã sản phẩm..." value="{{old('maSP')}}">
                @error('maSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('admin.products.list')}}" class="btn btn-warning">Quay lại</a>
            @csrf
        </form>


    </div>
@endsection
