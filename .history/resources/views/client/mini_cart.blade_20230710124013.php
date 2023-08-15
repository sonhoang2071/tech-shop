@if (!empty(Session::has("Cart")))
    <table>
        <tbody>
            @foreach (Session::get('Cart')->products as $item)
                @if (Count(Session::get('Cart')->products) <=3)
                    <tr>
                        <td class="ic-img"><img src="{{asset($item['productInfo']->hinhAnh)}}" alt="" class="img-item-cart"></td>
                        <td class="ic-content">
                            <div>
                                <p class="ic-price-quan">{{displayPrice($item['productInfo']->giaBan).' x '.$item['quantity']}}</p>
                                <h6 class="ic-name">{{$item['productInfo']->tenSP}}</h6>
                            </div>
                        </td>
                        <td class="ic-delete" style="cursor: pointer">
                            <i class="fa-solid fa-xmark fa-lg" data-id="{{$item['productInfo']->id}}"></i>
                        </td>
                    </tr>
                    @if (Count(Session::get('Cart')->products) == 3)
                        <tr>
                            <td>
                                <h4></h4>
                            </td>
                        </tr>
                    @endif
                @endif
            @endforeach
            <tr>
                <td>
                    <span>Total:</span>
                </td>
                <td>
                    <h4 class="ic-total">
                        {{displayPrice(Session::get('Cart')->totalPrice)}}
                    </h4>
                </td>
            </tr>
        </tbody>
    </table>
    <input id="total-quantity-cart" hidden type="number" value="{{Session::get('Cart')->totalQuantity}}">
@else
    <h4 style="width:fit-content; color:#d70018;">Giỏ hàng trống</h4>
@endif


