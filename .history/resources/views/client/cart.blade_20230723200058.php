@extends('client.master')
@section('content')
    @if (Auth::user())

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
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'cart/checkOut',
                type:'GET',
            }).done(function(respone){
                renderListCart(respone);
                Swal.fire(
                    'Bạn đã đặt hàng thành công',
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
