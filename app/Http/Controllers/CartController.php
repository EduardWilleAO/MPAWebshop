<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function index(Request $request){
        $cart = new Cart($request);

        /*$cart->addToCart($request, 'Item 1');
        $cart->addToCart($request, 'Item 2');
        $cart->addToCart($request, 'Item 3');
        $cart->addToCart($request, 'Item 4');
        $cart->addToCart($request, 'Item 5');
        $cart->addToCart($request, 'Item 6');*/

        //$cart->clearCart($request);

        $cart->getProducts($request);

        $products = $request->session()->get('products');
        return view('cart.index')->with(['cartProducts' => $products]);
    }
    public function addToCart(Request $request, $name){
        $cart = new Cart($request);
        $cart->addToCart($request, $name);

        $products = $request->session()->get('products');
        return redirect()->back();
    }
}
