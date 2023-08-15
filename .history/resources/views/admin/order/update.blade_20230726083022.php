@extends('admin.layouts.master')
@section('content')
    <div class="container py-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Trạng thái</label>
                <select name="category_id" class="form-select w-50">
                    <option value="{{$order->status}}">{{displayStatus($order->status)}}</option>
                        @for ($i = $order->status; $i < 2; $i++)

                        @endfor
                </select>
                @error('soLuong')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
@endsection
