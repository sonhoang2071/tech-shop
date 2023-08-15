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
        return $data = DB::select('SELECT MONTH(created_at) AS mm, SUM(tongTien) AS order_total
         FROM orders WHERE INNER JOIN orderdetail ON orders.id = orderdetail.id_order GROUP BY MONTH(created_at)');
    }

    public function plot(Request $req)  {
        return view('admin.statistical_report.list');
    }
}
