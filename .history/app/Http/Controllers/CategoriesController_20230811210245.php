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
        $req
    }
}
