<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrdersController extends Controller
{
    private $order;
    private $orderDetail;
    public function __construct(){
        $this->order = new Order();
        $this->orderDetail = new OrderDetail();
    }
    public function getList(){
        $title = "Admin Orders";
        $orderList = $this->order->getList();
        return view('admin.order.list',compact('orderList','title'));
    }
    public function getOrderDetail($id) {
        $title = "Admin Orders";
        $orderDetailList = $this->orderDetail->getList($id);
        return view('admin.order.list_detail_order',compact('orderDetailList','title'));

    }
    public function getOrderHistory() {
        $order = $this->order->getList(auth()->user()->id);
        return view('client.order_history',compact('order'));
    }
    public function getUpdateStatusOrder($id){
        $order = $this->order->getListByIdOrder($id)[0];
        return view('admin.order.update',compact('order'));
    }
    public function postUpdateStatusOrder(Request $req, $id) {

    }

}
