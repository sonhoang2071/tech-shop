<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function getList() {
        $orders = DB::table($this->table)
        ->orderBy('created_at','DESC')
        ->get();
        return $orders;
    }
    public function addOrder(){
        return DB::insert('INSERT INTO '.$this->table.' (maSP, tenSP, hinhAnh,id_loai, id_hieu, soLuong, giaMua, giaBan, ngayNhap) VALUES (?, ?, ?,?,?, ?, ?, ?, ?)',
        $data);
    }
}
