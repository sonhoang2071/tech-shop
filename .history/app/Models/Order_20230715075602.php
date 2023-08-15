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
    public function addOrder($data){
        return DB::insert('INSERT INTO '.$this->table.' (tongTien, created_at) VALUES (?,?)',
        $data);
    }
    public function updateOrder($id,$data) {
        $data[] = $id;
        return DB::update('UPDATE '' SET maSP=?, tenSP=?, hinhAnh=?, soLuong=?, giaMua=?, giaBan=?, ngayNhap=? where id = ?',$data);
    }
}
