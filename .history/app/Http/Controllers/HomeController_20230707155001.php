<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodcut;

class HomeController extends Controller
{
    private $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function home(){
        return view('client.home');
    }
    public function getDetail($id){

        $productDetail = $product->getDetail($id);
        return view('client.detail-product',compact('productDetail'));
    }
}
