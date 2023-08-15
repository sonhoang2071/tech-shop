<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        $req->validate([
            'cur_pass'  => 'required',
            'new_pass' => ['required', 'string', 'min:8',],
            'new_pass_confirm' => ['required', 'string','same:new_pass'],
        ],[
            'required' =>  ':attribute bắt buộc phải nhập',
            'string' => ':attribute bắt buộc phải là chuỗi ký tự',
            'min' => ':attribute có độ dài tối thiểu :min ký tự',
            'same' => ':attribute bắt buộc phải trùng mật khẩu',
        ],[
            'cur_pass' => 'Mật khẩu hiện tại',
            'new_pass' =>  'Mật khẩu mới',
            'new_pass_confirm' => 'Mật khẩu xác thực'
        ]);
        if(!Hash::check($req->cur_pass, auth()->user()->password)){
            return back()->withErrors(['cur_pass' => 'Mật khẩu hiện tại nhập không đúng']);
        };
        $data = [
            "password" => Hash::make($req->new_pass_confirm
        ];
        $this->user->updatePassword($data);
        return redirect()-> route('client.getProfile')->with('msg','Bạn đã cập nhật mật khẩu thành công');

    }
}
