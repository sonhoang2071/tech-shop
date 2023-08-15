<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\

class HomeController extends Controller
{
    public function home(){
        return view('client.home');
    }
    public function getDetail($id){
        $product = new Product;
    }
}
