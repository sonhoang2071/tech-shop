@if (!empty(Session::has("Cart")))
    <table>
        <tbody>
            @foreach (Session::get('Cart')->products as $item)
                @if (Count)

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


