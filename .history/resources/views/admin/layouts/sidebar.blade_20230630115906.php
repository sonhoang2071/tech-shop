<div class="py-3 border shadow " style="height: 100%">
    <div class="container" style="height: 100%" >
        <h2>ADMIN</h2>
        <hr>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="{{route('admin.home')}}"><i class="fa-solid fa-house"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="{{route('listProAdmin')}}"><i class="fa-brands fa-product-hunt"></i>Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-inbox"></i>Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-bag-shopping"></i>Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="#"><i class="fa-solid fa-user"></i>User</a>
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
</style>

