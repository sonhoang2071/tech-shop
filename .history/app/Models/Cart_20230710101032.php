<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function addToCart($product, $id){
        $newProduct = ['quantity' => 0,'price' => $product->giaBan, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->giaBan;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->giaBan;
        $this->totalQuantity++;
    }
    public function deleteItemCart($id){
        $this->totalPrice = $cart->totalPrice;
        $this->totalQuantity -= $this->products[$id];
    }
}
