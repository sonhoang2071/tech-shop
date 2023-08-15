@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container">
        @if (session('msg'))
            <div class="alert allert-succes">{{session('msg')}}</div>
        @endif
        <h1>List of Product</h1>
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
                </tr>
            </thead>
            <tbody>
                @if (!empty($productList))
                    @foreach ($productList as $key=>$item)
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @endforeach

                @endif
            </tbody>

        </table>
    </div>
@endsection