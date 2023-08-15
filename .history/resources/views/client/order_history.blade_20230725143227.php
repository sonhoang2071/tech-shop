@extends('client.master')
@section('content')
<div class="container-fluid px-0 bg-black">
    <div class="container px-0">
    </div>
  </div>
  <div class="container mt-3 mt-md-5">
    <h2 class="text-charcoal hidden-sm-down">Your Orders</h2>
    @if (!empty($order))
        @foreach ( as )
        $order
        @endforeach

    @endif


</div>
<style>
   .container.mt-3.mt-md-5 {
        width: 1000px;
    }
</style>

@endsection

