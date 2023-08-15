<?php
use App\Models\Category;
public function getAllCategory(){
    $category = new Category;
    return $category::getList();
}
