<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class Cart extends Controller
{
    /*
    * $my_array=array('cat', 'dog', 'mouse', 'bird', 'crocodile', 'wombat', 'koala', 'kangaroo');
    * $_SESSION['animals']=$my_array;
    * echo $_SESSION['animals'][1];
    */


    /**
    * Get what item the user selected.
    * Get cart array?
    * Add product to cart array
    * Sort array
    * Return back
    */

    public function addToCart($product) {
        session_start();

        $product = self::getProduct($product);

        array_push($this->cartArray, $_SESSION['product']);

        print_r($this->cartArray); 
        //return redirect()->back();
    }

    public function getProduct($product)
    {
        $available = true;

        // Change with method that actually checks product availability.
        if($available == true) {
            $_SESSION['product'] = $product;
        } else {
            return;
        }
    }
}
