<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private $order;
    public function __construct(){
        $this->order = new Order();
    }
    public function showCart(){
        return view('client.cart');
    }
    public function checkOut(Request $req){
        $data = [
            0,
            date('Y-m-d H:i:s')
        ];
        $tmp = $this->order->addOrder();
        dd($tmp);
    }

}
