<?php

namespace App;

use App\Http\Controllers\Controller;
use App\Models\User;

class Cart
{
    //get products function
    public $products;

    public function __construct($request){
        //if request has products, else lege array in products
        $this->session = $request->session()->has('products');
    }

    public function getSession($request){
        $sessionData = $request->session()->all();
        return $sessionData;
	}

    public function getProducts($request){
        $products = Cart::getSession($request);

        //for($i=0; $i<=count($products['products'])-1; $i++){
        //   print_r($products['products'][$i] . '<br>');
        //}
    }

    public function addToCart($request, $name){
        $request->session()->push('products', $name);
    }
    public function clearCart($request){
        $request->session()->flush();
    }
}
