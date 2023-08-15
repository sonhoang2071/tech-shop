<div class="">
    <div class="head1">
        <div class="top-nav">
            <img src="{{asset('assets/image/banner1.webp')}}" alt=""><img src="{{asset('assets/image/banner2.webp')}}" alt=""><img src="{{asset('assets/image/banner3.webp')}}" alt="">
        </div>
    </div>
    <div class="head2">
        <div class="main-nav">
            <a href="{{route('client.list')}}">
                <div class="head-logo">
                    <img src="{{asset('assets/image/logopng.png')}}" alt="" class="logo">
                </div>
            </a>
            <div class="dropdown">
                <button class="dropbtn" style="height: 40px;"><i class="fa-solid fa-list-ul fa-lg"></i>Danh mục</button>
                <div class="dropdown-content">
                    <a href="">Loại sản phẩm</a>
                    <div class="">
                        @foreach (getAllCateGory() as $item)
                            <a href="{{route('client.getProWith',['cate'=>$item->tenLoai])}}" style="display: flex">{{$item->tenLoai}}<i class="fa-solid fa-angle-right fa-lg" style="height: 20px;line-height: 20px;margin-left: auto;opacity: 0.6;"></i>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
            <form action="" method="post" style="margin-bottom: 0;">
                <div class="" style="display: flex;">
                    <button type="submit" class="but"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
                    <input type="search" name="search" id="" class="inp form-control" placeholder="Bạn cần tìm gì ?">
                </div>
            </form>
            <div class="block-cart">
                <a href="https://www.google.com/maps/search/CellphoneS+-+H%E1%BB%87+th%E1%BB%91ng+b%C3%A1n+l%E1%BA%BB+di+%C4%91%E1%BB%99ng+to%C3%A0n+qu%E1%BB%91c/@10.7798265,106.6645122,15z/data=!3m1!4b1?entry=ttu" class="cart-shopping" target="_blank">
                    <i class="fa-solid fa-store fa-xl"></i>
                    <span>Hệ thống của hàng</span>
                </a>
            </div>
            <div class="block-cart">
                <a href="{{route('client.cart')}}" class="cart-shopping">
                    @if (!empty(Session::has('Cart')))
                        <span class="quantity" id="total-quantity-show">{{Session::get('Cart')->totalQuantity}}</span>
                    @else
                        <span class="quantity" id="total-quantity-show">0</span>
                    @endif
                    <i class="fa-solid fa-cart-shopping fa-xl"></i>
                    <span>Giỏ hàng</span>
                </a>
                <div class="dropdown-cart">
                    <div id="change-item-cart">
                        @if (!empty(Session::has("Cart")))
                            <table>
                                <tbody>
                                    @foreach (Session::get('Cart')->products as $item)
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
                        @else
                            <h4 style="width:fit-content; color:#d70018;">Giỏ hàng trống</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="block-cart dropdown " aria-labelledby="navbarDropdown" >
                @guest
                @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="cart-shopping">
                            <i class="fa-regular fa-circle-user fa-xl"></i>
                            <span>Đăng nhập</span>
                        </a>
                @endif
                @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-content" id="menuUser-content" >
                            @if (Auth::user()->role == 'admin')
                                <a href="{{route('admin.home')}}" style="display:flex">Quản lý<i class="fa-solid fa-angle-right fa-lg" style="height: 20px;line-height: 20px;margin-left: auto;opacity: 0.6;"></i></a>
                            @else
                                <a href="{{route('client.getProfile')}}" style="display: flex">Tài khoản của bạn<i class="fa-solid fa-angle-right fa-lg" style="height: 20px;line-height: 20px;margin-left: auto;opacity: 0.6;"></i></a>
                                <a href="{{route('client.getOrderHistory')}}" style="display: flex">Lịch sử đơn hàng<i class="fa-solid fa-angle-right fa-lg" style="height: 20px;line-height: 20px;margin-left: auto;opacity: 0.6;"></i></a>
                            @endif
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            sonhoang2071()">
                                {{ __('Đăng xuất') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                @endguest

            </div>
        </div>
    </div>

</div>
<script>
    function sonhoang2071(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
    }
</script>
<style>
    .cart-shopping {
        text-decoration: none;
        color: white;

    }
    .cart-shopping:focus, .cart-shopping:hover {
        text-decoration: none;
        color: white;
    }
    .block-cart{
        padding: 10px 20px;
        background: hsla(0,0%,100%,.2);
        border-radius: 10px;
        margin-left: 32px;
    }
    .head1{
        background-color: #e9efff;
    }
    .top-nav{
        margin: 0 auto;
        width: fit-content;
    }
    .head2{
        width: 100%;
        height: 64px;
        background-color: #d70018;
    }
    .main-nav{
        height: 64px;
        display: flex;
        align-items: center;
        margin: 0 112px;
    }
    .head-logo{
        width: 160px;
        margin-right: 12px;
    }
    .logo{
        width: 100%;
    }
    .dropbtn {
    background: hsla(0,0%,100%,.2);
    color: white;
    padding: 10px 20px;
    font-size: 14px;
    font-weight:400;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    display: flex;
    align-items: center;
    margin-right: 24px;

}

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        border-radius: 10px;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background: #f1f1f1;
        border-radius: 10px;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .fa-list-ul{
        padding: 4px;
    }
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .but {
        background-color: #fff;
        border: 0;
        border-radius: 10px 0 0 10px;
        box-sizing: border-box;
        color: #707070;
        height: 34px;
        width: fit-content;
        margin-right: -4px;
    }
    .inp {
        width: 400px;
        border-style:none;
    }
    .inp:focus {
        outline: none;
        -webkit-box-shadow:none;
    }
    .but:hover{
        background-color: white;
    }
    table
    {
        border-collapse: separate;
        border-spacing: 0 12px;
    }
    .quantity{
        position: absolute;
        width: 16px;
        height: 16px;
        line-height: 16px;
        border-radius: 50%;
        color: #d70018;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 9px;
        font-weight: bold;
        margin-left: 5px;
    margin-top: -2px;
    }
    .block-cart {
        position: relative;
        height: 40px;
    }
    .dropdown-cart{
        position: absolute;
        background-color: #707070;
        display: none;
        margin-left: -20px;
        margin-top: 10px;
        background: #f9f9f9;
        min-width: 320px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        border-radius: 10px;
        padding: 12px;
    }
    .block-cart:hover .dropdown-cart{
        display: block;
    }
    .block-cart:hover .fa-xmark:hover{
        color: #d70018;
    }
    .img-item-cart{
        width: 80%;
    }
    .ic-img {
        width: 20%;
    }
    .ic-content {
        width:60%;
    }
    .ic-price-quan, .ic-total {
        color: #d70018
    }
    .ic-total {
        width: fit-content;
            float: right;
    }

    #menuUser-content {
        margin-left: -20px;
        margin-top: 10px;
    }
    #navbarDropdown {
        text-decoration: none;
        color: white;
    }

</style>
