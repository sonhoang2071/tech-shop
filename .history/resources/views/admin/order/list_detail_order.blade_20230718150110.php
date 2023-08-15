@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <h1>List of Order</h1>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="15%" >Mã Order</th>
                    <th >Mã sản phẩm</th>
                    <th width="20%">Số lượng</th>
                    <th>Thành tiền</th>
                    <th width>Thời gian</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($orderDetailList))
                    @foreach ($orderDetailList as $key=>$item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->id_order}}</td>
                            <td>{{$item->id_sp}}</td>
                            <td>{{$item->created_at}}</td>
                            
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
