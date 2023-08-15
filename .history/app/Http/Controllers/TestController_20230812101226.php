<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TestController extends Controller
{
    //
    public function gdata1() {
        return $data = DB::select('SELECT MONTH(created_at) AS mm, COUNT(*) AS order_no FROM orders GROUP BY MONTH(created_at)');
    }
    public function gdata2() {
        return $data = DB::select('SELECT MONTH(orders.created_at) AS mm, SUM(orders.tongTien) AS order_cost_price, SUM(products.giaMua * orderdetail.soLuong) AS giaBan
                        FROM orders
                        INNER JOIN orderdetail ON orders.id = orderdetail.id_order
                        INNER JOIN products ON orderdetail.id_sp = products.id
                        GROUP BY MONTH(orders.created_at)');
    }

    public function plot(Request $req)  {
        return view('admin.statistical_report.list');
    }
}
