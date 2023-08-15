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

    public function __constant($cart){
        $this->products = $cart->products;
        $this->totalPrice = $cart->totalPrice;
        $this->totalQuantity = $cart->totalQuantity;
    }
    public function addToCart($product, $id){
        $newProduct = ['quantity' => 1,'price' => , 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $products)) {
                $newProduct = $products[$id];
            }
        }
        $newProduct['quantity']++;
    }
}
