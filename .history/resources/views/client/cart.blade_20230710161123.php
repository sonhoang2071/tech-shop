@extends('client.master')
@section('content')
    <div class="main-cart">
        <div class="content-left"></div>
       <div class="content-right"></div>

    </div>
@endsection
<style>
    .main-cart {
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;


    }
    .content-left{
        flex: 1 1 800px;
        background-color: red;
    }
    .content-right {
        flex: 1 1 calc(100% - 800px);
        margin-left: 20px;
        display: block;
        background-color: blue;
        height: 10px;
    }
</style>
