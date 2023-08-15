@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5">
        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <h1>List of User</h1>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="15%" >Name</th>
                    <th >Email</th>
                    <th>SPhone</th>
                    <th width="20%">Gender</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($orderList))
                    @foreach ($orderList as $key=>$item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->tongTien}}</td>
                            <td class="{{displayClassStatusOrder($item->status)}}">{{displayStatus($item->status)}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="{{route('admin.orders.getDetail',['id'=>$item->id])}}" class="btn btn-info">Chi tiết</a></td>
                            <td><a href="{{route('admin.orders.getUpdateStatusOrder',['id'=>$item->id])}}" class="btn btn-warning">Cập nhật</a></td>
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
