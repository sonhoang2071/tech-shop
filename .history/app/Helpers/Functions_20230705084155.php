<?php
use App\Models\Category;
use App\Models\Bran;
function getAllCategory(){
    $category = new Category;
    return $category->getList();
}
function getAllBRand(){
    $brand = new Brand;
    return $category->getList();
}
function test(){
    return 'xinchao';
}
