<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public $user;
    public function __construct(){
        $this->user = new User();
    }
    public function getList(){
        $title = 'Admin Users';
        return view('admin.user.list',compact('title'));
    }
    public function getLogin(){
        return view('client.login');
    }
    public function getProfile(){
        return view('client.profile');
    }
    public function getEditProfile(){
        return view('client.edit_profile');
    }
    public function postEditProfile(Request $req){
        $data = [
            "name" => $req->name,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "address" => $req->address,

        ];
        $this->user->updateProfile($data);
        $msg = 'Bạn đã thay đổi thành công';
        return redirect()-> route('client.getProfile')->with('msg','Bạn đã cập nhật thông tin thành công');
    }
    public function getEditPassword() {
        return view('client.edit_password');
    }
    public function postEditPassword(Request $req) {
        dd($req);
        $data = [
            "cur_pass" => $req->cur_pass,
            "new_pass" => $req->new_pass,
            "new_pass_confirm" => $req->new_pass


        ];

    }
}
