<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getList(){
        $title = "Admin Orders"
        return view('admin.order.list',compact('title'));
    }
}
