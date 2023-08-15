@if (!empty($newCart))
    <table>
        <tbody>
            @foreach ($newCart->products as $item)
                <tr>
                    <td class="ic-img"><img src="{{asset($item->hinhAnh)}}" alt="" class="img-item-cart"></td>
                    <td class="ic-content">
                        <div>
                            <p class="ic-price-quan">12.000.000đ x 1</p>
                            <h6 class="ic-name">Iphone 14 ProMax</h6>
                        </div>
                    </td>
                    <td class="ic-delete">
                        <i class="fa-solid fa-xmark fa-lg"></i>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td>
                    <span>Total:</span>
                </td>
                <td>
                    <h4 class="ic-total">
                        {{displayPrice($newCart->totalPrice)}}
                    </h4>
                </td>
            </tr>
        </tbody>
    </table>
@endif


