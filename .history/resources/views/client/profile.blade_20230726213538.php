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
                                <div class="row" style="align-items: center;padding-bottom: 12px;border-bottom: 1px solid grey; padding-left:15px">
                                    <span style="width:160px">Name</span>
                                    <input type="checkbox" onclick="myFunction()" style="width:fit-content">
                                    <input id="name" class="form-control" type="text" value="{{Auth::user()->name}}" disabled style="width:fit-content"></div>
                              <tr>
                                <td>Date of Birth</td>
                                <td class="op-6">{{Auth::user()->dob}}</td>
                              </tr>
                              <tr>
                                <tr>
                                  <td>Gender</td>
                                  <td class="op-6">{{displayGender(Auth::user()->gender)}}</td>
                                </tr>
                                <tr>
                                  <td>Home Address</td>
                                  <td class="op-6">{{Auth::user()->address}}</td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td class="op-6">{{Auth::user()->email}}</td>
                                </tr>
                                <td>Phone Number</td>
                                <td class="op-6">{{Auth::user()->phone}}</td>
                                <tr>
                                    <td>Password</td>

                                    <td >
                                        <a href="">Đổi mật khẩu </a>
                                    </td>
                                </tr>
                                <tr>
                                  <td style="border-bottom: 0;">
                                      <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
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
      <script>
        function myFunction() {
            var input = document.getElementById("name");
            // Kiểm tra xem có thuộc tính disabled hay không
            if (input.disabled) {
            // Nếu có, xóa đi
            input.removeAttribute("disabled");
            } else {
            // Nếu không, thêm vào
            input.setAttribute("disabled", "disabled");
            }
        }
      </script>
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
        .op-6 {
            opacity: 0.6;

        }
      </style>

@endsection
