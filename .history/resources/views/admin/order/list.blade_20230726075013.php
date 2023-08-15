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
                    <th >Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th width="20%">Thời gian</th>
                    <th width="10%" ></th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($orderList))
                    @foreach ($orderList as $key=>$item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->tongTien}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="{{route('admin.orders.getDetail',['id'=>$item->id])}}" class="btn btn-info">Chi tiết</a></td>
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
