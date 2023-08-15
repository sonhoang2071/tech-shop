<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderDetail;
class CartController extends Controller
{
    private $order;
    private $orderDetail;
    public function __construct(){
        $this->order = new Order();
        $this->orderDetail = new OrderDetail();
    }
    public function showCart(){
        $user = auth()->user();
        return view('client.cart');
    }
    public function checkOut(Request $req){
        dd()
        $data = [
            'tongTien' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $idOrder = $this->order->addOrder($data);
        foreach(Session("Cart")->products as $item){
            $data = [
                'id_order' => $idOrder,
                'id_sp' => $item['productInfo']->id,
                'soLuong' => $item['quantity'],
                'tien' => $item['price'],
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->orderDetail->addOrderDetail($data);
        }
        $data =[
            Session("Cart")->totalPrice
        ];
        $this->order->updatePriceOrder($idOrder, $data);
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteAllCart();
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else {
            $req->session()->forget('Cart');
        }

        return view('client.mini_list_cart');
    }




}
