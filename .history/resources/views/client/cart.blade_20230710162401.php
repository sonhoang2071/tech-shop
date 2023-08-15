@extends('client.master')
@section('content')
    <div class="main-cart">
        <div class="content-left">
            <div class="content-left-head">
                <label for=""></label>
                <span>Đơn giá</span>
                <span>Số lượng</span>
                <span>Thành tiền</span>
            </div>
        </div>

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
        flex: 1 1 840px;
        background-color: red;
    }
    .content-right {
        flex: 1 1 calc(100% - 840px);
        margin-left: 20px;
        display: block;
        background-color: blue;
        height: 10px;
    }
    .content-left-head {
        background: rgb(255, 255, 255);
        padding: 9px 16px;
        border-radius: 4px;
        color: rgb(36, 36, 36);
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 12px;
        position: sticky;
        top: 105px;
        z-index: 99;
        display: grid;
        grid-template-columns: 368px 170px 120px 120px 30px;
        -webkit-box-align: center;
        align-items: center;
    }
</style>
