<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function getList($id=null) {
        if(!empty($id)) {
            $orders = DB::table($this->table)
            ->where('user_id','=',$id)
            ->orderBy('created_at','DESC')
            ->get();
        }
        else {
            $orders = DB::table($this->table)
            ->orderBy('created_at','DESC')
            ->get();
        }
        return $orders;
    }
    public function addOrder($data){
        $insertedId = DB::table($this->table)->insertGetId($data);
        $insertedRow = DB::table($this->table)->find($insertedId);
        return $insertedId;
    }
    public function updatePriceOrder($id,$data) {
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET tongTien = ? where id = ?',$data);
    }
    public function updateStatusOrder($id) {
        $new
        return DB::update('UPDATE '.$this->table.' SET tongTien = ? where id = ?',$data);
    }
}
