@extends('client.master')
@section('content')
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">{{Auth::user()->name}}</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-3 col-lg-3 " > <img alt="User Pic" src="{{asset('assets/image/user.png')}}" class="img-circle img-responsive"> </div>
                        <div class=" col-md-9 col-lg-9 ">
                          <table class="table table-user-information">
                            <tbody>

                              <tr>
                                <td>Date of Birth</td>
                                <td>{{Auth::user()->dob}}</td>
                              </tr>
                              <tr>
                                <tr>
                                  <td>Gender</td>
                                  <td>{{displayGender(Auth::user()->gender)}}</td>
                                </tr>
                                <tr>
                                  <td>Home Address</td>
                                  <td>{{Auth::user()->address}}</td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td><a href="mailto:info@support.com">{{Auth::user()->email}}</a></td>
                                </tr>
                                <td>Phone Number</td>
                                <td>{{Auth::user()->phone}}</td>
                                <tr>
                                    <td>Password</td>

                                    <td>
                                        <span type="password">abc123</span>
                                        <input type="password" value="FakePSW" id="myInput">
                                    </td>
                                </tr>
                                <tr>
                                  <td style="border-bottom: 0;">
                                      <a href="" class="btn btn-primary">Cập nhật thông tin</a>
                                  </td>
                                </tr>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </form>
      </div>
      <style>
        .user-row {
        margin-bottom: 14px;
        }

        .table-user-information > tbody > tr {
        border-top: 1px solid #ccc;
        }

        .table-user-information > tbody > tr:first-child {
        border-top: 0;
        }

        .table-user-information > tbody > tr > td {
        border-top: 0;
        }

        .panel {
        margin-top: 20px;
        }
        .panel-primary>.panel-heading {
            background-color: crimson;
            border-color:crimson;
        }
        .panel-primary {
            border-color:crimson;
        }
        .table-user-information > tbody > tr > td {
            border-top: 0;
            width: 80px;
        }
      </style>
@endsection
