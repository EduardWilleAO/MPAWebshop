<?php

namespace App;

use App\Http\Controllers\Controller;
use App\Models\User;

class Cart
{
    //get products function
    private $products;

    public function __construct($request){
        //if request has products, else lege array in products
        $this->session = $request->session()->has('products');
    }

    public function getProducts($request){
        $sessionData = $request->session()->all();
        return $sessionData;
	}

    public function getSession($request){
        $products = Cart::getProducts($request);

        for($i=0; $i<=count($products['products'])-1; $i++){
            print_r($products['products'][$i] . '<br>');
        }
    }

    // IMPORTNAT! begin met iets simpel in de session zetten

    public function addToCart($request){
        $request->session()->push('products', 'item2');
    }

    public function clearCart($request){
        $request->session()->flush();
    }
}
