@extends('layouts.app')

@section('content')
<section class="log-in-page">
    <div class="main-page shadow">
      <div class="welcome">
        <h2>Welcome to login</h2>
        <span class="guide">Please enter your details.</span>
      </div>
      <img src="{{asset('assets/image/login_logo.webp')}}" alt="" class="logo_login">
      <form class="form" action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email" class="label">EMAIL</label>
        <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="password" class="label">PASSWORD</label>
        <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p class="error"></p>
        <button class="but2">Sign in</button>
      </form>
      <p><a href="#!">Don't have an account? Sign up</a></p>
    </div>

  </section>

@endsection
