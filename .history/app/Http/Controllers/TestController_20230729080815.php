<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TestController extends Controller
{
    //
    public function __invoke() {
        return DB::select('SELECT MONTH(created_at) AS [], COUNT(*) FROM orders GROUP BY MONTH(created_at)');
    }
}
