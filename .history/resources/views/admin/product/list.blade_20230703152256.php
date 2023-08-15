@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <h1>List of Product</h1>
        <a href="{{route('admin.products.getAdd')}}" class="btn btn-primary">Thêm sản phẩm</a>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="2%">STT</th>
                    <th width="10%" >Mã sản phẩm</th>
                    <th width="15%">Tên sản phẩm</th>
                    <th width="10%">Hình ảnh</th>
                    <th>Loại sản phẩm</th>
                    <th>Thương hiệu</th>
                    <th width="7%">Số lượng</th>
                    <th >Giá mua</th>
                    <th >Giá bán</th>
                    <th width="15%">Thời gian</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($productList))
                    @foreach ($productList as $key=>$item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->maSP}}</td>
                            <td>{{$item->tenSP}}</td>
                            <td><img src="{{asset($item->hinhAnh)}}" alt="" style="width : 60%"></td>
                            <td>{{$item->tenLoai}}</td>
                            <td>{{$item->tenHieu}}</td>
                            <td>{{$item->soLuong}}</td>
                            <td>{{$item->giaMua}}</td>
                            <td>{{$item->giaBan}}</td>
                            <td>{{$item->ngayNhap}}</td>
                            <td><a href="{{route('admin.products.getEdit',['id'=>$item->id])}}" class="btn btn-info">Sửa</a></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.products.delete',['id'=>$item->id])}}" class="btn btn-danger" >Xóa</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">Không có dữ liệu</td>
                    </tr>
                @endif
            </tbody>

        </table>
    </div>
@endsection
