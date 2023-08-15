@extends('client.master')
@section('content')
    <div class="main-title">
        <h4>Giỏ hàng</h4>
    </div>
    <div id="main-cart">
        @if (!empty(Session::has("Cart")))
            <div class="content-left ">
                <div class="content-left-head ">
                    <label for="" style="font-weight: inherit;margin-bottom: 0;">Tất cả sản phẩm</label>
                    <span>Đơn giá</span>
                    <span>Số lượng</span>
                    <span>Thành tiền</span>
                    <span><i class="fa-regular fa-trash-can fa-lg"></i></span>
                </div>
                <div class="content-left-main">
                @foreach (Session::get("Cart")->products as $item)
                    <div class="row r-item">
                        <div class="col-1">
                            <div class="product-info">
                                <a href="" class="link-img">
                                    <div class="block-product-img">
                                        <img src="{{asset($item['productInfo']->hinhAnh)}}" alt="" class="product-img">
                                    </div>
                                </a>
                                <div class="product-name">
                                    <h5>{{$item['productInfo']->tenSP}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <span>{{displayPrice($item['productInfo']->giaBan)}}</span>
                        </div>
                        <div class="col-3">
                            <div class="qty-container">
                                <button class="qty-btn-minus btn-light" type="button" onclick="decreaseItem({{$item['productInfo']->id}})"><i class="fa fa-minus"></i></button>
                                <input type="tel" name="qty" value="{{$item['quantity']}}" class="input-qty" id="item-cart-{{$item['productInfo']->id}}"/>
                                <button class="qty-btn-plus btn-light" type="button" onclick="increaseItem({{$item['productInfo']->id}})"><i class="fa fa-plus" ></i></button>
                            </div>
                        </div>
                        <div class="col-4">{{displayPrice($item['price'])}}</div>
                        <div class="col-5" onclick="deleteItemListCart({{$item['productInfo']->id}})" style="cursor: pointer">
                            <i class="fa-regular fa-trash-can"></i>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>

            <div class="content-right">
                <div class="block-info-customer">
                    <div class="content-bic">
                        <div class="head-content">
                            <h3 class="hcb-title">Giao tới</h3>
                            <a href="" class="change-address">Thay đổi</a>
                        </div>
                        <div class="customer-info">
                            <p class="customer-info-name">Trần Vũ Hoàng Sơn</p>
                            <i></i>
                            <p class="customer-info-phone">0362284014</p>
                        </div>
                        <div class="address">
                            <span style="color: rgb(0, 171, 86);background-color: rgb(239, 255, 244)">Nhà</span>
                            180/69 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, TP HCM
                        </div>
                    </div>
                </div>
                <div class="block-voucher">
                    <div class="content-bv">
                        <div class="head-content">
                            <h3 class="hcb-title" style="color: rgb(36, 36, 36);">Shop khuyến mãi</h3>
                            <h4 class="hcb-title" style="font-size: 14px">Tối đa chọn 1</h4>
                        </div>
                        <div class="head-content">
                            <input type="text" name="" id="" placeholder="Nhập mã khuyến mãi..." class="form-control" style="width: 180px;">
                            <button type="submit" class="btn btn-primary">Nhập</button>
                        </div>
                    </div>
                </div>
                <div class="block-checkout">
                    <ul class="price-items">
                        <li class="price-item">
                            <span class="price-text">Tạm tính</span>
                            <span class="price-value">{{displayPrice(Session::get('Cart')->totalPrice)}}</span>
                        </li>
                        <li class="price-item">
                            <span class="price-text">Giảm giá</span>
                            <span class="price-value">-500.000 đ</span>
                        </li>
                    </ul>
                    <div class="price-total">
                        <span class="price-text">Tổng tiền</span>
                        <div style="text-align:right">
                            <span class="price-total-value">{{displayPrice(Session::get('Cart')->totalPrice)}}</span>
                            <span class="notice-vat">(Đã bao gồm VAT nếu có)</span>
                        </div>
                    </div>
                </div>
                <a href="javascript:" class="btn-checkout" onclick="deleteAll()">Đặt Hàng</a>
            </div>

        @else
            <h4 style="width:fit-content; color:#d70018;">Giỏ hàng trống</h4>
        @endif

    </div>
    <script>
        function renderListCart(respone){
            $("#main-cart").empty();
            $("#main-cart").html(respone);
            if($("#total-quantity-cart").val()) {
                $("#total-quantity-show").text($("#total-quantity-cart").val());
            } else {
                $("#total-quantity-show").text(0);
            }
        }
        function decreaseItem(id) {
            var $n =  $("#item-cart-"+id)
            var amount = Number($n.val());
            if(amount > 1) {
                $n.val(amount-1);
                $.ajax({
                    url:'updateItemListCart/' +id+ '/' +$("#item-cart-"+id).val() ,
                    type:'GET',
                }).done(function(respone){
                    renderListCart(respone);
                });
            }

        }
        function increaseItem(id){
            var $n = $("#item-cart-"+id);
            $n.val(Number($n.val())+1);
            $.ajax({
                url:'updateItemListCart/' +id+ '/' +$("#item-cart-"+id).val() ,
                type:'GET',
            }).done(function(respone){
                renderListCart(respone);
            });
        }

        function deleteItemListCart(id) {
            $.ajax({
                url:'deleteItemListCart/'+id,
                type:'GET',
            }).done(function(respone){
                renderListCart(respone);
                Swal.fire(
                    'Đã xóa khỏi giỏ hàng thành công',
                    'You clicked the button!',
                    'success'
                    )
            });
        }
        function deleteAll(){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr(content)
                }
            });
            $.ajax({
                url:'cart/checkOut',
                type:'GET',
            }).done(function(respone){
                renderListCart(respone);
                Swal.fire(
                    'Đã xóa khỏi giỏ hàng thành công',
                    'You clicked the button!',
                    'success'
                    )
            });
        }

    </script>
@endsection
<style>

    #main-cart {
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
    .head-content {
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
        color: rgb(128, 128, 137);
        font-weight: normal;
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
    p.customer-info-name {
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
    .customer-info i {
        display: block;
        width: 1px;
        height: 20px;
        background-color: rgb(235, 235, 240);
        margin: 0px 8px;
    }
    .block-voucher {
        background-color: white;
        border-radius: 4px;
    }
    .content-bv {
        border-radius: 4px;
        margin-bottom: 12px;
        padding: 16px;
        font-size: 14px;
        line-height: 20px;
    }
    .block-checkout {
        background: rgb(255, 255, 255);
        border-radius: 4px;
        padding-bottom: 8px;
    }
    .price-items {
        list-style: none;
        margin: 0px;
        padding: 17px 20px;
        border-bottom: 1px solid rgb(244, 244, 244);
    }
    .price-item {
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    .price-text {
        font-weight: 300;
        color: rgb(51, 51, 51);
        display: inline-block;
    }
    .price-value {

    }
    .price-total {
        padding: 17px 20px;
        display: flex;
        flex-wrap: nowrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin: 0px;
    }
    .price-total-value {
        color: rgb(254, 56, 52);
        font-size: 22px;
        font-weight: 400;
        text-align: right;
    }
    .notice-vat {
        font-weight: 300;
        font-style: normal;
        display: block;
        font-size: 12px;
        color: rgb(51, 51, 51);
        margin-top: 3px;
    }
    .btn-checkout {
        background: rgb(255, 66, 78);
        color: rgb(255, 255, 255);
        padding: 13px 10px;
        text-align: center;
        border-radius: 4px;
        border: none;
        width: 100%;
        display: block;
        cursor: pointer;
        margin: 15px 0px 0px;
    }
    .btn-checkout:hover {
        text-decoration: none;
        opacity: 0.8;
        color: white;
    }
    .r-item .col-3 {
        display: flex;
        justify-content: center;
        align-items: center;
        user-select: none;
    }
    .minus, .plus {
        display: inline-block;
        width: 20px;
        height: 20px;
        background-color: #EA6A9E;
        color: #fff;
        text-align: center;
        cursor: pointer;
        }
    .num {
        padding: 0 10px;
    }
    .qty-container{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .qty-container .input-qty{
        text-align: center;
        padding: 6px 10px;
        border: 1px solid #d4d4d4;
        max-width: 40px;
        height: 21.6px;
    }
    .qty-container .qty-btn-minus,
    .qty-container .qty-btn-plus{
        border: 1px solid #d4d4d4;
        padding: 10px 13px;
        font-size: 10px;
        height: 20px;
        width: 20px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .qty-container .qty-btn-plus{
        margin-left: -1px;
    }
    .qty-container .qty-btn-minus{
        margin-right: -1px;
    }

</style>
