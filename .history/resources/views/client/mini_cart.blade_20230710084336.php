@if (!empty($newCart))
    <table>
        <tbody>
            @foreach ($collection as $item)
            

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


