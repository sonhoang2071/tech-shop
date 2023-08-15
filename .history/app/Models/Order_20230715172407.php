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
        $insertedId = DB::table($this->table)->insertGetId($data);
        $insertedRow = DB::table($this->table)->find($insertedId);
        return $insertedRow;
    }
    public function updatePriceOrder($id,$data) {
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET tongTien = ? where id = ?',$data);
    }
}
