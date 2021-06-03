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
    public function logsession($request){
        $sessionData = session('item1');
        print_r($sessionData);
    }

    public function addToCart($request){
        session(['item1' => 'Hello World']);
    }
}
