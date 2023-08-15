<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
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
            'tongTien' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $tmp = $this->order->addOrder($data);
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        return view('client.mini_list_cart');
    }




}
