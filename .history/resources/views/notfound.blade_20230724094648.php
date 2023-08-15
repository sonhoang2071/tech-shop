@extends('client.master')
@section('content')
    <div class="block-notfound">
        <img src="{{asset('assets/image/not_found.jpeg')}}" alt="" class="notfound">
    </div>
    <style>
        .container {
        background-color: white;
        }
        .block-notfound {
            background-size: contain;
            margin-top: 12px;
        }
        .notfound {
            height: auto;
            max-width: 100%;
        }
    </style>
@endsection
