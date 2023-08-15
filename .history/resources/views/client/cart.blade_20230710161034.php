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
        bac

    }
    .content-left{
        flex: 1 1 90px;
    }
    .content-right {
        flex: 1 1 calc(100% - 900px);
        margin-left: 20px;
        display: block;
    }
</style>
