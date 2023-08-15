<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodcut;

class HomeController extends Controller
{
    public function home(){
        return view('client.home');
    }
    public function getDetail($id){
        $product = new Product();
        $productDetail = $product->getDetail($id);
        return view('client.detail-product',compact('productDetail'));
    }
}
