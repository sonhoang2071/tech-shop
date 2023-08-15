@extends('client.master')
@section('content')
    <div class="wrap">
        <div class="row">
            <div class="col-6 block-img c1 parent" >
                <div class="child">
                    <img src="{{asset($productDetail->hinhAnh)}}" alt="" class="img-pro" onclick="handleImg()">
                </div>
            </div>
            <div class="col-5 c2">
                <div class="row r1">
                    <h1>{{$productDetail->tenLoai.' '.$productDetail->tenSP}}</h1>
                </div>
                <hr style="margin:5px 0;"/>
                <div class="row r2 m-4">
                    <label for="" class="brand">Brand: </label>
                    <h2 class="brand-content">{{$productDetail->tenHieu}}</h2>
                </div>
                <div class="row r2 m-4 r-des">
                    <label for="" class="brand">Description: </label>
                    <h2 class="brand-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa sint voluptatibus! Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</h2>
                </div>
                <div class="row r2 r-pri">
                    <span class="price">{{displayPrice($productDetail->giaBan)}}</span>
                </div>
                <div class="row r2 m-4">
                    <a href="" class="btn btn-danger">MUA NGAY</a>
                    <a onclick="addToCart({{$productDetail->id}})" href="javascript:" class="btn btn-warning">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addToCart(id){
            $.ajax({
                url:'addToCart/'+id,
                type:'GET',
            }).done(function(respone){
                renderCart(respone);
                Swal.fire(
                    'Thêm vào giỏ hàng thành công',
                    'You clicked the button!',
                    'success'
                    )
            });
        }
        $("#change-item-cart").on("click", ".ic-delete i", function(){
            $.ajax({
                url:'deleteCart/'+$(this).data("id"),
                type:'GET',
            }).done(function(respone){
                renderCart(respone);
                Swal.fire(
                    'Đã xóa hàng thành công',
                    'You clicked the button!',
                    'success'
                    )
            });
        });
        function renderCart(respone) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(respone);
            if($("#total-quantity-cart").val()) {
                $("#total-quantity-show").text($("#total-quantity-cart").val());
            } else {
                $("#total-quantity-show").text(0);
            }

        }
        const listImage = document.querySelector(".content img");
        function handleImg(e) {
            const img = e.target;
            const imgUrl = e.target.getAttribute("src");
            const template = ` <div class="lightbox">
            <div class="lightbox-content">
                <i class="fa fa-angle-left lightbox-prev"></i>
                <img
                src=${imgUrl}
                alt=""
                class="lightbox-image"
                />
                <i class="fa fa-angle-right lightbox-next"></i>
            </div>`;
        }
    </script>
@endsection
<style>
    .container {
        background-color: white;
    }
    .wrap {
        margin-top: 60px;
    }
    .col-6.c1 {
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 12px;
        margin-left: 12px;
    }
    .col-5.c2 {
        padding-left: 36px
    }
    .block-img {
        display: inline-flex;
        align-items: center;
        justify-content: center;

    }
    .img-pro {
        width: 100%;
    }
    label.brand {
        width: 20%;
        height: fit-content;
        margin-bottom: 0;
        font-size: 16px;
    }
    h2.brand-content {
        width: fit-content;
        margin-bottom: 0;
        font-size: 16px;
        opacity: 0.8;

    }
    .r2 {
        align-items: center;
    }
    .row.r2.r-pri{
        margin-top: 20px;
        margin-left: 15px;
    }
    .price {
        font-size: 28px;
        font-weight: bold;
        color: #d70018;

    }
    a.btn.btn-danger {
        background-color: #d70018;
        width: 152px;
        height: 52px;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 40px;
    }
    a.btn.btn-warning {
        width: 220px;
        height: 52px;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color:#d70018;
        background-color: white;
        border: 1px solid #d70018;
        border-radius:10px;
    }
    a.btn.btn-warning:hover:active:focus {
        color: #fff;
        background-color: #d70018;
        border-color: #d70018;
    }
    .parent {
        position: relative;
        cursor: pointer;
        overflow: hidden;
    }
    .child {
        background-size: cover;
        transition: all 1.1s;
    }
    .parent:hover .child {
        transform: scale(1.2);
    }
    .lightbox {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    background-color: rgba(0, 0, 0, 0.75);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .lightbox-content {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 25px;
  }
  .lightbox-content img {
    max-height: 400px;
    width: 90%;
    object-fit: cover;
    border-radius: 4px;
  }
  .lightbox-content i {
    color: white;
    font-size: 60px;
    cursor: pointer;
    flex-shrink: 0;
  }

</style>
