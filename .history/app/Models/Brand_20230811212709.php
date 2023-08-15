<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    public function getList(){
        $brands = DB::table($this->table)
        ->orderBy('ngayNhap','DESC')
        ->get();
        return $brands;
    }
    public function add($data) {
        return DB::table($this->table)
        ->insert($data);
    }
}
