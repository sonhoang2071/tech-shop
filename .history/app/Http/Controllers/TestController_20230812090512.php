<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TestController extends Controller
{
    //
    public function gdata() {
        return $data = DB::select('SELECT MONTH(created_at) AS mm, COUNT(*) AS order_no FROM orders GROUP BY MONTH(created_at)');
    }

    public function plot(Request $req)  {
        return view('admin.');
    }
}
