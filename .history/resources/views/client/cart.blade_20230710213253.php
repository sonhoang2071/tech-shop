@extends('client.master')
@section('content')
    <div class="main-title">
        <h4>Giỏ hàng</h4>
    </div>
    <div class="main-cart">
        <div class="content-left ">
            <div class="content-left-head ">
                <label for="" style="font-weight: inherit;margin-bottom: 0;">Tất cả sản phẩm</label>
                <span>Đơn giá</span>
                <span>Số lượng</span>
                <span>Thành tiền</span>
                <span><i class="fa-regular fa-trash-can fa-lg"></i></span>
            </div>
            <div class="content-left-main">
                <div class="row r-item">
                    <div class="col-1">
                        <div class="product-info">
                            <a href="" class="link-img">
                                <div class="block-product-img">
                                    <img src="{{asset('assets/image/login_logo.webp')}}" alt="" class="product-img">
                                </div>
                            </a>
                            <div class="product-name">
                                <h5>Iphone 14 ProMax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">Ahihi</div>
                    <div class="col-3">Ahihi</div>
                    <div class="col-4">Ahihi</div>
                    <div class="col-5">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </div>
                <div class="row r-item">
                    <div class="col-1">
                        <div class="product-info">
                            <a href="" class="link-img">
                                <div class="block-product-img">
                                    <img src="{{asset('assets/image/login_logo.webp')}}" alt="" class="product-img">
                                </div>
                            </a>
                            <div class="product-name">
                                <h5>Iphone 14 ProMax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">Ahihi</div>
                    <div class="col-3">Ahihi</div>
                    <div class="col-4">Ahihi</div>
                    <div class="col-5">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </div>
                <div class="row r-item">
                    <div class="col-1">
                        <div class="product-info">
                            <a href="" class="link-img">
                                <div class="block-product-img">
                                    <img src="{{asset('assets/image/login_logo.webp')}}" alt="" class="product-img">
                                </div>
                            </a>
                            <div class="product-name">
                                <h5>Iphone 14 ProMax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">Ahihi</div>
                    <div class="col-3">Ahihi</div>
                    <div class="col-4">Ahihi</div>
                    <div class="col-5">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </div>


            </div>
        </div>

        <div class="content-right">
            <div class="block-info-customer">
                <div class="content-bic">
                    <div class="head-content-bic">
                        <h3 class="hcb-title">Giao tới</h3>
                        <a href="" class="change-address">Thay đổi</a>
                    </div>
                    <div class="customer-info">
                        <p class="customer-info-name">Trần Vũ Hoàng Sơn</p>
                        <i></i>
                        <p class="customer-info-phone">0362284014</p>
                    </div>
                    <div class="address">

                    </div>
                </div>
            </div>
            <div class="block-voucher"></div>
            <div class="block-checkout"></div>
            <div class="btn-checkout"></div>
        </div>

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
        grid-template-columns: 358px 150px 120px 150px 30px;
        -webkit-box-align: center;
        align-items: center;
    }
    .row.r-item {
        margin-left: 0px;
        align-items: center;
        margin-bottom: 12px;
        background-color: white;
        padding-top: 12px;
        width: 840px;

    }
    .r-item .col-1 {
        width: 358px;
        padding: 0px 15px;
    }
    .r-item .col-2 {
        width: 150px;
        padding: 0px 15px;
    }
    .r-item .col-3 {
        width: 120px;
        padding: 0px 15px;
    }
    .r-item .col-4 {
        width: 150px;
        padding: 0px 15px;
    }
    .r-item .col-5 {
        width: 30px;
        float: right;
    }
    .content-left-main {


    }
    .product-info {
        display: flex;
        align-items: center;
    }
    .link-img {
        width: 25%;

    }
    .block-product-img {
        padding: 4px;

    }
    .product-img {
        width: 100%;
    }
    .product-name {
        margin-left: 12px;
    }
    .block-info-customer {
        background: white;
        border-radius: 4px;

    }
    .content-bic {
        border-radius: 4px;
        margin-bottom: 12px;
        padding: 16px;
        font-size: 14px;
        line-height: 20px;
    }
    .head-content-bic {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-bottom: 12px;
    }
    .customer-info {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(56, 56, 61);
        margin-bottom: 2px;
        font-weight: 600;
    }
    .address {

    }
    .hcb-title {
        color: rgb(128, 128, 137);
        font-weight: normal;
        margin: 0px;
        font-size: 16px;
        line-height: 20px;
    }
    a.change-address:hover {
        text-decoration: none;
    }
    .customer-info-name {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        margin: 0px;
    }
    p.customer-info-phone {
        margin: 0px;
        flex-shrink: 0;
    }
    display.customer-info i {
        display: block;
        width: 1px;
        height: 20px;
        background-color: rgb(235, 235, 240);
        margin: 0px 8px;
    }

</style>
