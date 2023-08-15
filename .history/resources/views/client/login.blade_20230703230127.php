@extends('client.master')
@section('content')
<section class="log-in-page">
    <div class="main-page shadow">
      <div class="welcome">
        <h2>Welcome to login</h2>
        <div>
            <img src="{{asset('assets/image/login_logo.png')}}" alt="">
        </div>
        <span class="guide">Please enter your details.</span>
      </div>
      <form class="form" action="#!">
        <label for="email" class="label">EMAIL</label>
        <input name="email" type="email" class="input-field" id="email"placeholder="Enter your email" />
        <label for="password" class="label">PASSWORD</label>
        <input name="password" type="password" class="input-field" id="password" placeholder="Enter your password" />

        <p class="error"></p>
        <button class="but2">Sign in</button>
      </form>
      <p><a href="#!">Don't have an account? Sign up</a></p>
    </div>

  </section>
  <style>
      body {
        line-height: 1.5em;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow: hidden;
        margin: 0;
    }
    .welcome {
        text-align: center;
        margin: 10px 0 10px 0;
    }
    h2 {
        margin-bottom: 10px;
        font-size: 31px;
    }
    .log-in-page {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
    }
    .main-page {
        width: 50%;
        height: 100vh;
        background: white;
     /* background-color: white; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: -40px;

    }
    .sub-page {
        width: 50%;
        height: 100vh;
    }
    .form {
        width: 450px;
        margin: 15px 0 15px 0;
        position: relative;

    }
    .actions {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin: 0px 0 10px 0;
    }
    .input-field {
        display: block;
        width: inherit;
        height: 50px;
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 15px;
        border: none;
        background: rgba(0, 0, 0, 0.05);
        font-size: 16px;
        box-sizing: border-box;
        border-radius: 5px;
        transition: ease-in-out;
        transition-duration: .4s;
    }
    .input-field::placeholder {
        font-size: 16px;
    }
    .input-field:focus {
        outline: none;
        border:none;
    }
    .but2 {
        box-sizing: border-box;
        border: none;
        width: 100%;
        height: 46px;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        background: linear-gradient(135deg, #f75959 0%, #f35587 100%);;
        transition: ease-in-out;
        transition-duration: 1s;
        color: white;
        font-size: 18px;
    }
    .but2:hover {
        background-color: #f35588;
    }
    .but2:active {
        transform: scale(0.8);
    }
    .but2:focus {
        outline: none;
    }
    .label {
        width: 100%;
        color: black;
    }
    .img {
        width: 100%;
        object-fit: cover;
    }
    a {
        color: #075157;
        text-decoration: none;
    }
    .error {
        text-align: center;
        color: #9d0208;
        font-size: small;
        margin: 10px 0 10px 0;
    }

    @media (max-width: 900px) {
        .main-page {
            width: 100%;
            background-color: white;
        }
        .sub-page {
            display: none;
        }
        .form {
            width: 70%;
        }
  }

    @media (max-width: 600px) {
         .main-page {
            background: white;
        }
        .form {
            width: 90%;
        }
      .actions {
        font-size: 14px;
      }
      .input-field {
         margin-top: 10px;
        margin-bottom: 10px;
      }
      h2 {
        font-size: 25px;
      }
  }
  </style>
@endsection
