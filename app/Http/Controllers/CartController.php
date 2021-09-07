<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function index(Request $request){
        $cart = new Cart($request);
        //$cart->addToCart($request);
        //$cart->clearCart($request);
        $cart->getProducts($request);

        $products = $request->session()->get('products');
        return view('cart.index')->with(['cartProducts' => $products]);
    }
}
