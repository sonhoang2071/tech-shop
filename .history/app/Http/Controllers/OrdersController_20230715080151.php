<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\

class OrdersController extends Controller
{
    private $order;
    public function __construct(){
        $this->order = new Product();
    }
    public function getList(){
        $title = "Admin Orders";
        return view('admin.order.list',compact('title'));
    }
    public function addOrder(){

    }
}
