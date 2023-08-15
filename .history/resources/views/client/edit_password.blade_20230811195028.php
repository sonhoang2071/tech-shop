@extends('client.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="block-img">
                    <h2>Cập nhật thông tin khách hàng</h2>
                    <img src="{{asset('assets/image/login_logo.webp')}}" alt="" class="logo_login">
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Họ tên') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? Auth::user()->name }}" autocomplete="name" autofocus placeholder="Nhập họ tên...">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        





                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-res" >
                                    {{ __('Cập nhật thông tin') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        border:0;
    }
    .logo_login {
        width: 12%;
    }
    .block-img {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-top: 24px;
    }
    .op-6{
        opacity: 0.6;
    }
</style>
@endsection
