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
        return view('client.home');
    }
    public function getDetail($id){

        $productDetail = $this->product->getDetail($id)[0];
        dd($productDetail);
        return view('client.detail_product',compact('productDetail'));
    }
}
