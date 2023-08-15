<?php
use App\Models\Category;
function getAllCategory(){
    $category = new Category;
    return $category::getList();
}
function test(){
    return 'xinchao';
}
