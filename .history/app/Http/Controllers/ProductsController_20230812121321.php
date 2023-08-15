<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Product;
use DB;
use Session;
use App\Models\Cart;
class ProductsController extends Controller
{
    private $product;
    private const _PAGE = 5;
    public function __construct(){
        $this->product = new Product();
    }
    public function home(){
        return view('client.home');
    }
    public function getList(){
        $title = 'Admin Products';
        $productList = $this->product->getAllProducts();
        return view('admin.product.list',compact('title','productList'))->with('msg','Thanh cong hehe');
    }
    public function getAdd(){
        $title = 'Thêm mới sản phẩm';
        return view('admin.product.add',compact('title'));
    }
    public function postAdd(Request $request){
        $request->validate([
            'maSP' => 'required|unique:products',
            'tenSP' => 'required|unique:products',
            'soLuong' => 'required|integer|min:1',
            'giaMua' => 'required|integer|min:1000',
            'giaBan' => 'required|integer|min:1000',
            'hinhAnh' => 'required|image|mimes:jpeg,png,jpg,webp'
        ], [
            'maSP.required' => 'Mã sản phẩm bắt buộc nhập',
            'tenSP.required' => 'Tên sản phẩm bắt buộc nhập',
            'soLuong.required' => 'Số lượng sản phẩm bắt buộc nhập',
            'giaMua.required' => 'Giá mua sản phẩm bắt buộc nhập',
            'giaBan.required' => 'Giá bán sản phẩm bắt buộc nhập',
            'maSP.unique' => 'Mã sản phẩm đã tồn tại trên hệ thống',
            'tenSP.unique' => 'Tên sản phẩm đã tồn tại trên hệ thống',
            'soLuong.integer' => 'Số lượng bắt buộc phải là số',
            'giaMua.integer' => 'Giá mua bắt buộc phải là số',
            'giaBan.integer' => 'Giá bán bắt buộc phải là số',
            'soLuong.min' => 'Số lượng tối thiểu phải là :min trở lên',
            'giaMua.min' => 'Giá mua tối thiểu phải là :min trở lên',
            'giaBan.min' => 'Giá bán tối thiểu phải là :min trở lên',
            'hinhAnh.required' => 'Hình ảnh bắt buộc phải chọn',
            'hinhAnh.image' => 'Kiểu dữ liệu hình ảnh không phù hợp'
        ]);

        $imageName = $request->file('hinhAnh')->getClientOriginalName();
        $path = $request->file('hinhAnh')->storeAs('images',$imageName,'public');
        $pathImage = '/storage'.'/'.$path;
        $data = [
            $request->maSP,
            $request->tenSP,
            $pathImage,
            $request->category_id,
            $request->brand_id,
            $request->soLuong,
            $request->giaMua,
            $request->giaBan,
            date('Y-m-d H:i:s')

        ];
        $this->product->addProduct($data);
        return redirect()->route('admin.products.list')->with('msg','Thêm sản phẩm mới thành công');

    }
    public function getEdit(Request $request, $id=0){
        $title = 'Cập nhật sản phẩm';
        if(!empty($id)){
            $productDetail = $this->product->getDetail($id);
            if(!empty($productDetail[0])){
                $request->session()->put('id',$id);
                $productDetail = $productDetail[0];
            } else {
                return redirect()->route('admin.products.list')->with('msg','Sản phẩm không tồn tại');
            }
        } else {
            return redirect()->route('admin.products.list')->with('msg','Liên kết không tồn tại');
        }
        return view('admin.product.update',compact('title','productDetail'));
    }
    public function postEdit(Request $request){
        $id = session('id');
        if(empty($id)){
            return back()->with('msg','Liên kết không tồn tại');
        }
        $request->validate([
            'maSP' => 'required|unique:products,maSP,'.$id,
            'tenSP' => 'required|unique:products,tenSP,'.$id,
            'soLuong' => 'required|integer|min:1',
            'giaMua' => 'required|integer|min:1000',
            'giaBan' => 'required|integer|min:1000',
            'hinhAnh' => 'required|image|mimes:jpeg,png,jpg,webp'
        ], [
            'maSP.required' => 'Mã sản phẩm bắt buộc nhập',
            'tenSP.required' => 'Tên sản phẩm bắt buộc nhập',
            'soLuong.required' => 'Số lượng sản phẩm bắt buộc nhập',
            'giaMua.required' => 'Giá mua sản phẩm bắt buộc nhập',
            'giaBan.required' => 'Giá bán sản phẩm bắt buộc nhập',
            'soLuong.integer' => 'Số lượng bắt buộc phải là số',
            'giaMua.integer' => 'Giá mua bắt buộc phải là số',
            'giaBan.integer' => 'Giá bán bắt buộc phải là số',
            'soLuong.min' => 'Số lượng tối thiểu phải là :min trở lên',
            'giaMua.min' => 'Giá mua tối thiểu phải là :min trở lên',
            'giaBan.min' => 'Giá bán tối thiểu phải là :min trở lên',
            'hinhAnh.required' => 'Hình ảnh bắt buộc phải chọn',
            'hinhAnh.image' => 'Kiểu dữ liệu hình ảnh không phù hợp',
            'maSP.unique' => 'Mã sản phẩm đã tồn tại trên hệ thống',
            'tenSP.unique' => 'Tên sản phẩm đã tồn tại trên hệ thống'
        ]);

        $imageName = $request->file('hinhAnh')->getClientOriginalName();
        $path = $request->file('hinhAnh')->storeAs('images',$imageName,'public');
        $pathImage = '/storage'.'/'.$path;
        $data = [
            $request->maSP,
            $request->tenSP,
            $pathImage,
            $request->soLuong,
            $request->giaMua,
            $request->giaBan,
            date('Y-m-d H:i:s')
        ];
        $this->product->updateProduct($id,$data);
        return back()->with('msg','Cập nhật sản phẩm thành công');
    }
    public function deleteProduct($id=0){
        if(!empty($id)){
            $deletePro = $this->product->deleteProduct($id);
            if($deletePro){
                $msg = 'Xóa sản phẩm thành công';
            } else {
                $msg = 'Xóa sản phẩm thất bại. Vui lòng kiểm tra lại !!!';
            }
        } else {
            $msg = 'Liên kết không tồn tại';
        }
        return back()->with('msg',$msg);
    }
    public function addToCart(Request $req, $id){
        $product = $this->product->getDetail($id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addToCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        return view('client.mini_cart');
    }
    public function deleteItemCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else {
            $req->session()->forget('Cart');
        }
        return view('client.mini_cart');
    }
    public function deleteItemListCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(Count($newCart->products) > 0){
            $req->session()->put('Cart',$newCart);
        }
        else {
            $req->session()->forget('Cart');
        }
        return view('client.mini_list_cart');
    }
    public function updateItemListCart(Request $req, $id, $quantity) {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateItemCart($id, $quantity);
        $req->session()->put('Cart',$newCart);
        return view('client.mini_list_cart');
    }

    public function getDetail($id){

        $productDetail = $this->product->getDetail($id)[0];

        return view('client.detail_product',compact('productDetail'));
    }
    public function list(Request $req){
        $condi = $req->search;
        $type = 'search';
        $products = $this->product->getAllProducts($condi, $type,self::_PAGE);
        if($products->isEmpty()) {
            $products = null;
        }
        return view('client.home',compact('products'));
    }
    public function showList(Request $req){

    }
    public function getProWithCate(Request $req){
        $tmp = urldecode($req->path());
        $condi = substr($tmp, strpos($tmp, '/') + 1);
        $typeOfCondi = 'cate';
        $productList = $this->product->getAllProducts($condi, $typeOfCondi);
        return view('client.pro_with_condi',compact('productList'));
    }
    public function getProWithBrand(Request $req) {
        $tmp = urldecode($req->path());
        $condi = substr($tmp, strpos($tmp, '/') + 1);
        $typeOfCondi = 'brand';
        $productList = $this->product->getAllProducts($condi, $typeOfCondi);
        return view('client.pro_with_condi',compact('productList'));
    }

}
