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
                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">{{displayPrice($item->tongTien)}}</p>
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

