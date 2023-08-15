<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
//Route Admin
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.layouts.home');
    })->name('home');
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('list',[ProductsController::class,'getList'])->name('list');
        Route::get('add',[ProductsController::class,'getAdd'])->name('getAdd');
        Route::post('add',[ProductsController::class,'postAdd'])->name('postAdd');
        Route::get('edit/{id}',[ProductsController::class,'getEdit'])->name('getEdit');
        Route::post('update',[ProductsController::class,'postEdit'])->name('postEdit');
        Route::get('delete/{id}',[ProductsController::class,'deleteProduct'])->name('delete');
    });
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('list',[CategoriesController::class,'getList'])->name('list');
    });
    Route::prefix('brands')->name('brands.')->group(function(){
        Route::get('list',[BrandsController::class,'getList'])->name('list');
    });
    Route::prefix('orders')->name('orders.')->group(function(){
        Route::get('list',[OrdersController::class,'getList'])->name('list');
        Route::get('list/{id}',[OrdersController::class,'getOrderDetail'])->name('getDetail');
    });
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('list',[UsersController::class,'getList'])->name('list');
    });
    Route::prefix('reports')->name('reports.')->group(function(){
        Route::get('list',[ReportsController::class,'getList'])->name('list');

    });

});
//Route Client
Route::prefix('/')->name('client.')->group(function(){
    Route::get('',[ProductsController::class,'list'])->name('list');
    Route::get('category/{cate}',[ProductsController::class,'getProWithCate'])->name('getProWith');
    Route::get('list/{id}',[ProductsController::class, 'getDetail'])->name('getDetail');
    Route::get('list/addToCart/{id}',[ProductsController::class,'addToCart'])->name('addToCart');
    Route::get('list/deleteCart/{id}',[ProductsController::class,'deleteItemCart'])->name('deleteItemCart');
    Route::get('deleteItemListCart/{id}',[ProductsController::class,'deleteItemListCart'])->name('deleteItemListCart');
    Route::get('updateItemListCart/{id}/{quantity}',[ProductsController::class,'updateItemListCart'])->name('updateItemListCart');
    Route::get('deleteAllCart',[ProductsController::class,'deleteAllCart'])->name('deleteAllCart');
    Route::get('cart',[CartController::class,'showCart'])->name('cart');
    Route::get('cart/checkOut',[CartController::class,'checkOut'])->name('checkOut');

});

Roue::get('',function(){
    <</h1>
});

Route::get('/home', [HomeController::class, 'index'])->name('testhome');
