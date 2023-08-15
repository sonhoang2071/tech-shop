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
                <label for="">Tên loại sản phẩm</label>
                <input type="text" name="tenLoai" class="form-control w-50" placeholder="Tên loại sản phẩm..." value="{{old('tenLoai')}}">
                @error('tenLoai')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Mô tả</label>
                <input type="text" name="moTa" class="form-control w-50" placeholder="Mô tả..." value="{{old('moTa')}}">
                @error('moTa')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('admin.categories.list')}}" class="btn btn-warning">Quay lại</a>
            @csrf
        </form>


    </div>
@endsection
