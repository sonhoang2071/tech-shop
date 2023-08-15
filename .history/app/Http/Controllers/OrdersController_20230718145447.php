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
        $this->order = new OrderDetail();
    }
    public function getList(){
        $title = "Admin Orders";
        $orderList = $this->order->getList();
        return view('admin.order.list',compact('orderList','title'));
    }
    public function getOrderDetail($id) {
        $orderDetailList = $this->order
    }


}
