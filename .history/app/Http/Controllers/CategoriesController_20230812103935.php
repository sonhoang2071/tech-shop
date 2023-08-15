<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    private $category;
    public function __construct(){
        $this->category = new Category();
    }
    public function getList(){
        $title = 'Admin Categories';
        $categoryList = $this->category->getList();
        return view('admin.category.list',compact('title','categoryList'))->with('msg','Thanh cong hehe');
    }
    public function getAdd(){
        $title = 'Thêm mới loại sản phẩm';
        return view('admin.category.add',compact('title'));
    }
    public function postAdd(Request $req) {
        $req->validate([
            'tenLoai' => 'required|unique:categories',
            'moTa' => 'required|string'
        ],[
            'unique' => ':attribute đã tồn tại trên hệ thống',
            'required' => ':attribute bắt buộc phải nhập',
            'string' => ':attribute không đúng định dạng'
        ],[
            'tenLoai' => 'Tên loại sản phẩm',
            'moTa' => 'Mô tả sản phẩm'
        ]);
        $data = [
            "tenLoai" => $req->tenLoai,
            "moTa" => $req->moTa,
            "ngayNhap" => date('Y-m-d H:i:s')
        ];
        $this->category->add($data);
        return redirect()->route('admin.categories.list')->with('msg','Thêm sản phẩm mới thành công');
    }
    public function getEdit($id){
        $br
    }
}
