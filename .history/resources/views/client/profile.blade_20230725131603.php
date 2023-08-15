@extends('client.master')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Jordan Ramey</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://gravatar.com/avatar/e60ddbdd1921331df1b59abcecb6a8d1?s=80&amp;d=https://codepen.io/assets/avatars/user-avatar-80x80-fd2a2ade7f141e06f8fd94c000d6ac7a.png" class="img-circle img-responsive"> </div>
                  <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>Department:</td>
                          <td>Programming</td>
                        </tr>
                        <tr>
                          <td>Hire date:</td>
                          <td>06/01/2011</td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>08/25/2016</td>
                        </tr>
                        <tr>
                          <tr>
                            <td>Gender</td>
                            <td>Male</td>
                          </tr>
                          <tr>
                            <td>Home Address</td>
                            <td>Street in, State</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:info@support.com">info@email.com</a></td>
                          </tr>
                          <td>Phone Number</td>
                          <td>123-4567-890
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        .panel-heading {
            background-color: #337ab7;
    border-color: #337ab7;
}

      </style>
@endsection
