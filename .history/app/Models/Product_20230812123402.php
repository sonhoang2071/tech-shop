<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function getAllProducts($condition = null, $type = null, $page = null){
        if(!empty($condition)){
            if($type === 'cate') {
                $products = DB::table($this->table)
                ->select('products.*','categories.tenLoai as tenLoai', 'brands.tenHieu as tenHieu')
                ->join('categories','products.id_loai','=','categories.id')
                ->join('brands','products.id_hieu','=','brands.id')
                ->orderBy('products.ngayNhap','DESC')
                ->where('categories.tenLoai','=',$condition);

            }
            else if($type === 'brand') {
                $products = DB::table($this->table)
                ->select('products.*','categories.tenLoai as tenLoai', 'brands.tenHieu as tenHieu')
                ->join('categories','products.id_loai','=','categories.id')
                ->join('brands','products.id_hieu','=','brands.id')
                ->orderBy('products.ngayNhap','DESC')
                ->where('brands.tenHieu','=',$condition);

            } else if($type === 'search') {
                $products = DB::table($this->table)
                ->select('products.*','categories.tenLoai as tenLoai', 'brands.tenHieu as tenHieu')
                ->join('categories','products.id_loai','=','categories.id')
                ->join('brands','products.id_hieu','=','brands.id')
                ->orderBy('products.ngayNhap','DESC')
                ->where(function($query) use ($condition){
                    $query->orWhere('products.tenSP', 'like', '%'.$condition.'%');
                    $query->orWhere('brands.tenHieu', 'like', '%'.$condition.'%');
                    $query->orWhere('categories.tenLoai', 'like', '%'.$condition.'%');
                });

            }
        } else {
            $products = DB::table($this->table)
            ->select('products.*','categories.tenLoai as tenLoai', 'brands.tenHieu as tenHieu')
            ->join('categories','products.id_loai','=','categories.id')
            ->join('brands','products.id_hieu','=','brands.id')
            ->orderBy('products.ngayNhap','DESC');

        }
        if(!empty($page)){
            return $products->paginate($page)->withQue;
        } else {
            return $products->get();
        }

    }
    public function addProduct($data){
        return DB::insert('INSERT INTO products (maSP, tenSP, hinhAnh,id_loai, id_hieu, soLuong, giaMua, giaBan, ngayNhap) VALUES (?, ?, ?,?,?, ?, ?, ?, ?)',
        $data);
    }
    public function getDetail($id){
        $products = DB::table($this->table)
        ->select('products.*','categories.tenLoai as tenLoai', 'brands.tenHieu as tenHieu')
        ->join('categories','products.id_loai','=','categories.id')
        ->join('brands','products.id_hieu','=','brands.id')
        ->orderBy('products.ngayNhap','DESC')
        ->where('products.id','=',$id)
        ->get();
        return $products;
    }
    public function updateProduct($id,$data){
        $data[] = $id;
        return DB::update('UPDATE products SET maSP=?, tenSP=?, hinhAnh=?, soLuong=?, giaMua=?, giaBan=?, ngayNhap=? where id = ?',$data);
    }
    public function deleteProduct($id){
        return DB::delete('DELETE FROM products WHERE id=? ',[$id]);
    }
}
