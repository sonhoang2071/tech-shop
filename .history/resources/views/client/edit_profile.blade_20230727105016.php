@extends('client.master')

@section('content')
    <div class="container py-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="name" class="form-control w-50" placeholder="Mã sản phẩm..." value="{{old('name') ?? Auth::user()->name}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
@endsection
