<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    public function getList(){
        $list = DB::table($this->table)
        ->orderBy('ngayNhap','DESC')
        ->get();
        return $list;
    }
    public function addOrderDetail($data){
        return DB::table($this->table)->insert($data);
    }
}
