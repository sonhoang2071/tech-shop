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
    return $product->getAllProducts();
}
function displayPrice($price){
    $a = $price/1000000;
    $b = $price/1000 - ($price/1000000)*1000;

        $b=='000';

    return $a.'.'.$.'.'.'000đ';
}
function test(){
    return 'xinchao';
}
