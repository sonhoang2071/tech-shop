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
        $order = $this->order->getList();
        dd(str_pad($this->id, 8, "0", STR_PAD_LEFT));
        return view('client.order_history');
    }


}
