@extends('client.master')
@section('content')
    <div class="m-9 shadow" >
        <form action="" method="post">
            <div class="mb-3">
                <label for="">USERNAME</label>
                <input type="text" name="username" class="form-control w-50" placeholder="Enter username..." value="{{old('username')}}">
            </div>
            <div class="mb-3">
                <label for="">PASSWORD</label>
                <input type="password" name="password" class="form-control w-50" placeholder="Enter password..." value="{{old('password')}}">
            </div>
        </form>
    </div>
@endsection
