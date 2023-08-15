@extends('client.master')
@section('content')
    <div class="main-title">
        <h4>Giỏ hàng</h4>
    </div>
    <div class="main-cart">
        <div class="content-left">
            <div class="content-left-head">
                <label for="">Tất cả sản phẩm</label>
                <span>Đơn giá</span>
                <span>Số lượng</span>
                <span>Thành tiền</span>
                <span><i class="fa-solid fa-trash-can"></i></span>
            </div>
            <div class="row r-item">
                <div class="col-1">AHaha</div>
                <div class="col-2">Ahihi</div>
                <div class="col-3">Ahihi</div>
                <div class="col-4">Ahihi</div>
                <div class="col-5">Ahihi</div>
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
    .main-title {
        margin: 20px 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }
    .main-title h4 {
        font-size: 20px;
        font-weight: 500;
        margin: 0px;
        color: rgb(0, 0, 0);
        line-height: 28px;
        text-transform: uppercase;
        flex-basis: calc(797px);
    }
    .content-left{
        flex: 1 1 840px;
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
        grid-template-columns: 358px 180px 120px 120px 30px;
        -webkit-box-align: center;
        align-items: center;
    }
    .r-item .col-1 {
        width: 398px
px
;
    padding: 0px 15px;
}
    }
</style>
