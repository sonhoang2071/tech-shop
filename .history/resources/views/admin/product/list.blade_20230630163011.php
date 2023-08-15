@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert allert-success">{{session('msg')}}</div>
        @endif
        <h1>List of Product</h1>
        <a href="{{route('admin.products.getAdd')}}" class="btn btn-primary">Thêm sản phẩm</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="10%" >Mã sản phẩm</th>
                    <th width="15%">Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th width="8%">Số lượng</th>
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
                            <td>{{$item->hinhAnh}}</td>
                            <td>{{$item->soLuong}}</td>
                            <td>{{$item->giaMua}}</td>
                            <td>{{$item->giaBan}}</td>
                            <td>{{$item->ngayNhap}}</td>
                            <td>Sửa</td>
                            <td>Xóa</td>
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
