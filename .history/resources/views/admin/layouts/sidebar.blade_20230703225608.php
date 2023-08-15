<div class="py-3 border shadow" style="height: 100%; position: fixed;width:16.66666667%">
    <div class="container" style="height: 100%" >
        <h2>ADMIN</h2>
        <hr>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="{{route('admin.home')}}"><i class="fa-solid fa-house"></i>Home</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="{{route('admin.products.list')}}"><i class="fa-brands fa-product-hunt"></i>Product</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="{{route('admin.categories.list')}}"><i class="fa-solid fa-inbox"></i>Category</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="{{route('admin.brands.list')}}"><i class="fa-solid fa-paperclip"></i></i>Brand</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-bag-shopping"></i>Order</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-user"></i>User</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-bookmark"></i>Statistical Report</a>
            </li>
            <li class="nav-item mb-2 log-out" >
                <a class="nav-link link-logout" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
            </li>
        </ul>


    </div>

</div>
<style>

    .container .nav-link:hover {
        color: white;
        background-color:#0d6efd
    }
    .container .nav-link {
        color: black;

    }
    i {
        margin-right: 12px;
    }
    .log-out {
        margin-top: 260px;
        border: 1px solid rgb(0, 174, 255);
    }

</style>

