@extends('client.master')
@section('content')
    <div>
        <img src="{{asset('assets/image/not_found_mobile.jpeg')}}" alt="" class="notfound">
    </div>
    <style>
        .container {
        background-color: white;
        }
        .notfound {
            background-size: contain;
            min-height: 500px
            max-width: 100%;
        }
    </style>
@endsection
