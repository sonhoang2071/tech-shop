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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>

                </tr>
            </thead>
            <tbody>
                @if (!empty($userList))
                    @foreach ($userList as $key=>$item)
                    if()
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td >{{displayGender($item->gender)}}</td>
                            <td>{{$item->address}}</td>
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
