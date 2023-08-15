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
        return view('admin.brand.add',compact('title'));
    }
    public function postAdd(Request $req) {
        $req->([
            'tenHieu' => 'required|unique:categories',
            'moTa' => 'required|string'
        ],[
            'unique' => ':attribute đã tồn tại trên hệ thống',
            'required' => ':attribute bắt buộc phải nhập',
            'string' => ':attribute không đúng định dạng'
        ],[
            'tenHieu' => 'Tên loại sản phẩm',
            'moTa' => 'Mô tả sản phẩm'
        ]);
        $data = [
            "tenHieu" => $req->tenHieu,
            "moTa" => $req->moTa,
            "ngayNhap" => date('Y-m-d H:i:s')
        ];
        dd($data);

    }
}
