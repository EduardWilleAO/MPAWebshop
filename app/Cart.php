<?php

namespace App;

use App\Http\Controllers\Controller;
use App\Models\User;

class Cart
{
    private $session;

    public function __construct($request){
        $this->session = $request->session();
    }

    // IMPORTNAT! begin met iets simpel in de session zetten




    /*public function addToCart($product) {
        session_start();

        $product = self::getProduct($product);

        array_push($this->cartArray, $_SESSION['product']);

        print_r($this->cartArray); 
        return redirect()->back();
    }

    public function getProduct($product)
    {
        $available = true;

        //Change with method that actually checks product availability.
        if($available == true) {
            $_SESSION['product'] = $product;
        } else {
            return;
        }
    }*/
}
