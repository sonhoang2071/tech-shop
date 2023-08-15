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
                            <label for="cur_pass" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu hiện tại') }}</label>

                            <div class="col-md-6">
                                <input id="cur_pass" type="text" class="form-control @error('cur_pass') is-invalid @enderror" name="cur_pass" value="{{ old('cur_pass')}}" autocomplete="cur_pass" autofocus placeholder="Nhập mật khẩu hiện tại...">

                                @error('cur_pass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new_pass" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu mới') }}</label>

                            <div class="col-md-6">
                                <input id="new_pass" type="text" class="form-control @error('new_pass') is-invalid @enderror" name="new_pass" value="{{ old('new_pass')}}" autocomplete="new_pass" autofocus placeholder="Nhập mật khẩu mới...">

                                @error('new_pass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new_pass_confirm" class="col-md-4 col-form-label text-md-end">{{ __('Nhập lại mật khẩu mới') }}</label>

                            <div class="col-md-6">
                                <input id="new_pass_confirm" type="text" class="form-control @error('new_pass_confirm') is-invalid @enderror" name="new_pass_confirm" value="{{ old('new_pass_confirm')}}" autocomplete="cur_new_pass_confirmpass" autofocus placeholder="Nhập lại mật khẩu mới...">

                                @error('new_pass_confirm')
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
