<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    private $brand;
    public function __construct(){
        $this->brand = new Brand();
    }
    public function getList(){
        $title = 'Admin Brands';
        $brandList = $this->brand->getList();
        return view('admin.brand.list',compact('title','brandList'))->with('msg','Thanh cong hehe');
    }
    public function getAdd(){
        $title = 'Thêm mới thương hiệu sản phẩm';
        return view
    }
}
