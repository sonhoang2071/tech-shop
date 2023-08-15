<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function getList(){
        $title = 'Admin Statistical Report';
        return view('admin.statistical_report.list',compact('title'));
    }
}
