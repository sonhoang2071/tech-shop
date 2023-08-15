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
        dd($tmp);
    }
    public function addToCart(Request $req, $id){
        $product = $this->product->getDetail($id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addToCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        return view('client.mini_cart');
    }
    public function deleteItemCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else {
            $req->session()->forget('Cart');
        }
        return view('client.mini_cart');
    }
    public function deleteItemListCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else {
            $req->session()->forget('Cart');
        }
        return view('client.mini_list_cart');
    }
    public function updateItemListCart(Request $req, $id, $quantity) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateItemCart($id, $quantity);
        $req->session()->put('Cart',$newCart);
        return view('client.mini_list_cart');
    }

}
