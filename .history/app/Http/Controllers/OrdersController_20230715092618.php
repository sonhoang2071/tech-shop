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
        return view('admin.order.list',compact('title'));
    }
    public function addOrder(){
        $data= [
            0,
            date('Y-m-d H:i:s')
        ];
        
        dd($tmp);
    }
}
