@extends('admin.layouts.master')
@section('content')
    <div class="container py-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Mã order</label>
                <input type="text" name="tenSP" class="form-control w-50" placeholder="Tên sản phẩm..." value="{{old('tenSP')}}">
                @error('tenSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Tổng tiền</label>
                <input type="text" name="tenSP" class="form-control w-50" placeholder="Tên sản phẩm..." value="{{old('tenSP')}}">
                @error('tenSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Trạng thái</label>
                <select name="category_id" class="form-select w-50">
                    <option value="{{$order->status}}">{{displayStatus($order->status)}}</option>
                        @for ($i = ++$order->status; $i < 3; $i++)
                            <option value="{{$i}}">{{displayStatus($i)}}</option>
                        @endfor
                </select>
                @error('soLuong')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tenSP" class="form-control w-50" placeholder="Tên sản phẩm..." value="{{old('tenSP')}}">
                @error('tenSP')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
@endsection
