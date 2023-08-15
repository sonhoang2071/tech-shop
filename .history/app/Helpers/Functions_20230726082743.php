<?php
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\OrderDetail;
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
    if($price == 0){
        return '0đ';
    } else {
        $a = $price/1000000;
        $b = $price/1000 - ($price/1000000)*1000;
        if($b === 0){
            $b='000';
        }
        return $a.'.'.$b.'.'.'000 đ';
    }
}
function getListDetailOrder($id){
    $orderDetail = new OrderDetail();
    return $orderDetail->getList($id);
}
function getNameProduct($id){
    $product = new Product;
    $product = $product->getDetail($id)[0];
    return $product;
}
function displayStatus($status){
    if($status==0){
        return 'Đang chuẩn bị hàng';
    }
    else if()
}
function test(){
    return 'xinchao';
}
