<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function getList(){
        $categories = DB::table($this->table)
        ->orderBy('ngayNhap','DESC')
        ->get();
        return $categories;
    }
    public function add($data) {
        return DB::table($this->table)
        ->insert($data);
    }
    public function getDetail($id) {
        return DB::table($this->table)
        ->where('id','=',$id)
        ->first();
    }
    public function add($data) {
        return DB::table($this->table)
        ->update($data);
    }
}
