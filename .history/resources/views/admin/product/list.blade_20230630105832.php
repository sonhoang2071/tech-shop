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
                    <th >Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                    <th>Thời gian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection
