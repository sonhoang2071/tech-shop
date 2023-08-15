<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(){
        return view('client.cart');
    }
    public function addOrder(Request $req){
        $data = [
            0,
            date('Y-m-d H:i:s')
        ];
        $tmp = $this->order->addOrder();
        dd($tmp);
    }

}
