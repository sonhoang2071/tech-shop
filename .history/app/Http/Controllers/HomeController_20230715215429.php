<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    private $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function home(){
        dd(Session("Cart")->products[0]);
        return view('client.home');
    }

}
