<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    private $order;
    public function __construct(){
        $this->order = new Order();
    }
    public function getList(){
        $title = "Admin Orders";
        $orderList = 
        return view('admin.order.list',compact('title'));
    }


}
