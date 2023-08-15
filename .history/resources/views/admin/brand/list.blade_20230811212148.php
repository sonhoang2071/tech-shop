@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <h1>List of Brand</h1>
        <a href="{{route('admin.brands.getAdd')}}" class="btn btn-primary">Thêm thương hiệu sản phẩm</a>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="15%" >Tên loại sản phẩm</th>
                    <th >Mô tả</th>
                    <th width="15%">Thời gian</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($brandList))
                    @foreach ($brandList as $key=>$item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->tenHieu}}</td>
                            <td>{{$item->moTa}}</td>
                            <td>{{$item->ngayNhap}}</td>
                            <td><a href="{{route('admin.products.getEdit',['id'=>$item->id])}}" class="btn btn-info">Sửa</a></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.products.delete',['id'=>$item->id])}}" class="btn btn-danger" >Xóa</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">Không có dữ liệu</td>
                    </tr>
                @endif
            </tbody>

        </table>
    </div>
@endsection
