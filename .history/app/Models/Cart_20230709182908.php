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
        $this->products = = $cart->products;
    }
}
