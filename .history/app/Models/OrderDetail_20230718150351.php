<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    public function getList($id = null){
        if(!empty($id)){
            $list = DB::table($this->table)
            ->orderBy('creap','DESC')
            ->where('id','=',$id)
            ->get();
            return $list;
        } else {
            $list = DB::table($this->table)
            ->orderBy('created_at','DESC')
            ->get();
            return $list;
        }
    }
    public function addOrderDetail($data){
        return DB::table($this->table)->insert($data);
    }
}
