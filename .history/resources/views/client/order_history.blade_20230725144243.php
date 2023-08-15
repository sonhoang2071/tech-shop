@extends('client.master')
@section('content')
<div class="container-fluid px-0 bg-black">
    <div class="container px-0">
    </div>
  </div>
  <div class="container mt-3 mt-md-5">
    <h2 class="text-charcoal hidden-sm-down">Your Orders</h2>
    @if (!empty($order))
        @foreach ($order as $item)
            <div class="row">
                <div class="col-12">
                <div class="list-group mb-5">
                    <div class="list-group-item p-3 bg-snow" style="position: relative;">
                    <div class="row w-100 no-gutters">
                        <div class="col-6 col-md" style="padding-left: 20px;">
                        <h6 class="text-charcoal mb-0 w-100">Order Number</h6>
                        <a href="" class="text-pebble mb-0 w-100 mb-2 mb-md-0">{{$item->id}}</a>
                        </div>
                        <div class="col-6 col-md">
                        <h6 class="text-charcoal mb-0 w-100">Date</h6>
                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">{{$item->created_at}}</p>
                        </div>
                        <div class="col-6 col-md">
                        <h6 class="text-charcoal mb-0 w-100">Total</h6>
                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">$19.54</p>
                        </div>
                        <div class="col-6 col-md">
                        <h6 class="text-charcoal mb-0 w-100">Shipped To</h6>
                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">Late M. Night</p>
                        </div>
                    </div>

                    </div>
                    <div class="list-group-item p-3 bg-white">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-9 pr-0 pr-md-3">
                        <div class="alert p-2 alert-success w-100 mb-0">
                            <h6 class="text-green mb-0"><b>Shipped</b></h6>
                            <p class="text-green hidden-sm-down mb-0">Est. delivery between Aug 5 – Aug 9th, 2017</p>
                        </div>
                        </div>
                        <div class="row no-gutters mt-3">
                        <div class="col-3 col-md-1">
                            <img class="img-fluid pr-3" src="https://tanga2.imgix.net/https%3A%2F%2Fs3.amazonaws.com%2Ftanga-images%2Ffc79d08c12dc.jpeg?ixlib=rails-2.1.1&fit=crop&w=500&h=500&auto=format%2Ccompress&cs=srgb&s=c9a50d474788f2658d13b21aa62edd6c" alt="">
                        </div>
                        <div class="col-9 col-md-5 pr-0 pr-md-3">
                            <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal">1 x URGE Basics iPhone 6/iPhone 6 Plus Magnetic Wallet Case</a>
                            </h6>
                            <ul class="list-unstyled text-pebble mb-2 small">
                            <li class="">
                                <b>Color:</b> Red
                            </li>
                            <li class="">
                                <b>Size:</b> L
                            </li>
                            </ul>
                            <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>$19.54</b></h6>
                        </div>
                        <div class="col-12 col-md-3 hidden-sm-down">
                            <a href="" class="btn btn-secondary w-100 mb-2">Buy It Again</a>
                        </div>
                        </div>
                        <div class="row no-gutters mt-3">
                        <div class="col-3 col-md-1">
                            <img class="img-fluid pr-3" src="https://tanga2.imgix.net/https%3A%2F%2Fs3.amazonaws.com%2Ftanga-images%2Ffc79d08c12dc.jpeg?ixlib=rails-2.1.1&fit=crop&w=500&h=500&auto=format%2Ccompress&cs=srgb&s=c9a50d474788f2658d13b21aa62edd6c" alt="">
                        </div>
                        <div class="col-9 col-md-5 pr-0 pr-md-3">
                            <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal">1 x URGE Basics iPhone 6/iPhone 6 Plus Magnetic Wallet Case</a>
                            </h6>
                            <ul class="list-unstyled text-pebble mb-2 small">
                            <li class="">
                                <b>Color:</b> Red
                            </li>
                            <li class="">
                                <b>Size:</b> L
                            </li>
                            </ul>
                            <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>$19.54</b></h6>
                        </div>
                        <div class="col-12 col-md-3 hidden-sm-down">
                            <a href="" class="btn btn-secondary w-100 mb-2">Buy It Again</a>
                        </div>
                        </div>
                        <div class="row no-gutters mt-3">
                        <div class="col-3 col-md-1">
                            <img class="img-fluid pr-3" src="https://tanga2.imgix.net/https%3A%2F%2Fs3.amazonaws.com%2Ftanga-images%2Ffc79d08c12dc.jpeg?ixlib=rails-2.1.1&fit=crop&w=500&h=500&auto=format%2Ccompress&cs=srgb&s=c9a50d474788f2658d13b21aa62edd6c" alt="">
                        </div>
                        <div class="col-9 col-md-5 pr-0 pr-md-3">
                            <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal">1 x URGE Basics iPhone 6/iPhone 6 Plus Magnetic Wallet Case</a>
                            </h6>
                            <ul class="list-unstyled text-pebble mb-2 small">
                            <li class="">
                                <b>Color:</b> Red
                            </li>
                            <li class="">
                                <b>Size:</b> L
                            </li>
                            </ul>
                            <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>$19.54</b></h6>
                        </div>
                        <div class="col-12 col-md-3 hidden-sm-down">
                            <a href="" class="btn btn-secondary w-100 mb-2">Buy It Again</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    @endif


</div>
<style>
   .container.mt-3.mt-md-5 {
        width: 1000px;
    }
</style>

@endsection

