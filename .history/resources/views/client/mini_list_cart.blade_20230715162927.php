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
        <form action=""></form>
        <a href="{{route('client.checkOut')}}" class="btn-checkout">Đặt Hàng</a>
    </div>
@else
    <h4 style="width:fit-content; color:#d70018;">Giỏ hàng trống</h4>
@endif


