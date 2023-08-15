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
                        <div class="alert p-2 {{displayClassStatusOrder($item->status)}} w-100 mb-0">
                            <h6 class="text-green mb-0"><b>{{displayStatus($item->status)}}</b></h6>
                            <p class="text-green hidden-sm-down mb-0">Est. delivery between Aug 5 – Aug 9th, 2017</p>
                        </div>
                        </div>
                        @foreach ( getListDetailOrder($item->id) as $itemDetail )
                            <div class="row no-gutters mt-3">
                                <div class="col-3 col-md-1">
                                    <img class="img-fluid pr-3" src="{{asset(getNameProduct($itemDetail->id_sp)->hinhAnh)}}" alt="">
                                </div>
                                <div class="col-9 col-md-5 pr-0 pr-md-3">
                                    <h6 class="text-charcoal mb-2 mb-md-1">
                                    <a href="" class="text-charcoal">{{$itemDetail->soLuong}} x {{getNameProduct($itemDetail->id_sp)->tenSP}}</a>
                                    </h6>
                                    <ul class="list-unstyled text-pebble mb-2 small">
                                    <li class="">
                                        <b>Loại sản phẩm:</b> {{getNameProduct($itemDetail->id_sp)->tenLoai}}
                                    </li>
                                    <li class="">
                                        <b>Thương hiệu:</b> {{getNameProduct($itemDetail->id_sp)->tenHieu}}
                                    </li>
                                    <li class="">
                                        <b>Đơn giá:</b> {{getNameProduct($itemDetail->id_sp)->giaBan}}
                                    </li>
                                    </ul>
                                    <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>{{$itemDetail->tien}}</b></h6>
                                </div>
                                <div class="col-12 col-md-3 hidden-sm-down">

                                    <a href="{{route('client.getDetail',['id'=>$item->id])getNameProduct($itemDetail->id_sp)->id)}}" class="btn btn-secondary w-100 mb-2">Buy It Again</a>
                                </div>
                            </div>
                        @endforeach
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
    .yellow {
        background: lightgoldenrodyellow;
        color: black;
    }
    .blue {
        background: lightblue;
        color: black;
    }
    .green {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
</style>

@endsection

