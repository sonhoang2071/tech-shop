<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        
    }
}
