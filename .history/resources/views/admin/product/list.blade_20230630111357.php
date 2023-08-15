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
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection
