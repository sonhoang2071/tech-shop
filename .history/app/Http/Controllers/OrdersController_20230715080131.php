<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    private $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function getList(){
        $title = "Admin Orders";
        return view('admin.order.list',compact('title'));
    }
    public function addOrder(){

    }
}
