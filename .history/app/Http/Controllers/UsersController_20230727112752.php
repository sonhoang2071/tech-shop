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
        $this->user->update
    }

}
