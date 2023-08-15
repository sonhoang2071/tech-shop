@extends('client.master')
@section('content')
    <div class="shadow" >
        <div class="col-5">
           <form action="">
            <div class="mb-3">
                <label for="">USERNAME</label>
                <input type="text" name="username" id="" placeholder="Enter username...">
            </div>
            <div class="mb-3">
                <label for="">PASSWORD</label>
                <input type="password" name="password" id="" placeholder="Enter password...">
            </div>
           </form>
        </div>
        <div class="col-5">
            <form action="">
                <div class="mb-3">
                    <label for="">USERNAME</label>
                    <input type="text" name="username" id="" placeholder="Enter username...">
                </div>
                <div class="mb-3">
                    <label for="">PASSWORD</label>
                    <input type="password" name="password" id="" placeholder="Enter password...">
                </div>
               </form>
        </div>
    </div>
@endsection
