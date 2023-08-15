<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __invoke() {
        DB::select('SELECT MONTH(created_at), COUNT(*) FROM orders GROUP BY MONTH(created_at);', [1])
    }
}
