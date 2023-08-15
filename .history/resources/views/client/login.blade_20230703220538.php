@extends('client.master')
@section('content')
<section class="log-in-page">
    <div class="main-page shadow">
      <div class="welcome">
        <h2>Welcome back</h2>
        <span class="guide">Please enter your details.</span>
      </div>
      <form class="form" action="#!">
        <label for="email" class="label">
          EMAIL
          <input name="email" type="email" class="input-field" id="email"
                 placeholder="Enter your email" />
        </label>

        <label for="password" class="label">
            PASSWORD
          <input name="password" type="password" class="input-field" id="password"
                 placeholder="Enter your password" />
        </label>

        <p class="error"></p>

        <div class="actions">
          <label for="check-box">
            <input type="checkbox" class="check-box" id="check-box" />
            Remember for 30 days</label>

          <a href="#!">Forgot Password?</a>
        </div>
        <button class="btn">Sign in</button>
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
        margin: 40px 0 10px 0;
    }
    .input-field {
        display: block;
        width: inherit;
        height: 50px;
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 15px;
        border: 1px solid #006d77;
        background-color: transparent;
        font-size: 18px;
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
        border: 1px solid #006d77bb;
    }
    .btn {
        box-sizing: border-box;
        border: none;
        width: 100%;
        height: 46px;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        background-color: linear-gradient(135deg, #f75959 0%, #f35587 100%);;
        transition: ease-in-out;
        transition-duration: 1s;
        color: white;
        font-size: 18px;
    }
    .btn:hover {
        background-color: #006d77bb;
    }
    .btn:active {
        transform: scale(0.8);
    }
    .btn:focus {
        outline: none;
    }
    .label {
        width: 100%;

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
    .check-box{
        accent-color: #006d77bb;
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
