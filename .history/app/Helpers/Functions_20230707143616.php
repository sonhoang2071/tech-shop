<?php
use App\Models\Category;
use App\Models\Brand;
use App\Models\Prodcut
function getAllCategory(){
    $category = new Category;
    return $category->getList();
}
function getAllBRand(){
    $brand = new Brand;
    return $brand->getList();
}
function test(){
    return 'xinchao';
}
