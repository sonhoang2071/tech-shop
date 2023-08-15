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
        $req->validate([
            'tenHieu' => 'required|unique:brands',
            'moTa' => 'required|string'
        ],[
            'unique' => ':attribute đã tồn tại trên hệ thống',
            'required' => ':attribute bắt buộc phải nhập',
            'string' => ':attribute không đúng định dạng'
        ],[
            'tenHieu' => 'Tên thương hiệu sản phẩm',
            'moTa' => 'Mô tả sản phẩm'
        ]);
        $data = [
            "tenHieu" => $req->tenHieu,
            "moTa" => $req->moTa,
            "ngayNhap" => date('Y-m-d H:i:s')
        ];
        $this->brand->add($data);
        return redirect()->route('admin.brands.list')->with('msg','Thêm thương hiệu mới thành công');

    }
    public function getEdit($id){
        $item = $this->brand->getDetail($id);
        $title = 'Cập thương hiệu sản phẩm';
        return view('admin.brand.update',compact('title','item'));
    }
    public function postEdit(Request $req, $id) {
        $req->validate([
            'tenHieu' => 'required|unique:categories',
            "moTa" => 'required|string'
        ],[
            'required' => ':attribute bắt buộc phải nhập',
            'unique' => ':attribute đã tồn tại trên hệ thông',
            'string' => ':attribute không đúng kiểu định dạng'
        ],[
            'tenHieu' => 'Tên thương hiệu sản phẩm',
            'moTa' => 'Mô tả loại sản phẩm'
        ]);
        $data = [
            "tenHieu" => $req->tenHieu,
            "moTa" => $req->moTa
        ];

        $this->category->edit($id, $data);
        return redirect()->route('admin.categories.list')->with('msg','Cập nhật thành công');
    }
}
