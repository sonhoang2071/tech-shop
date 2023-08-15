<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __invoke() {
        $rs = DB::select('SELECT MONTH(created_at), COUNT(*) FROM orders GROUP BY MONTH(created_at)');
        dd($rs);
    }
}
