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
            'new_pass' => ['required', 'string', 'min:8', 'confirmed'],
            'new_pass_confirm' => ['required', 'string','same:password'],
        ],[
            'required' =>  ':attribute bắt buộc phải nhập'
            
        ]);
        if(!Hash::check($req->cur_pass, auth()->user()->password)){
            return back()->withErrors(['cur_pass' => 'Mật khẩu hiện tại nhập không đúng']);
        };
        $data = [
            "cur_pass" => Hash::make($req->cur_pass),
            "new_pass" => $req->new_pass,
            "new_pass_confirm" => $req->new_pass_confirm
        ];


    }
}
