<?php
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
function getAllCategory(){
    $category = new Category;
    return $category->getList();
}
function getAllBRand(){
    $brand = new Brand;
    return $brand->getList();
}
function getAllProduct(){
    $product = new Product;
    return 
}
function test(){
    return 'xinchao';
}
