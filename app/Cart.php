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
        $sessionData = $request->session()->all();

        $sessionCount = count($sessionData['products']);
        echo 'The session has ' . $sessionCount . ' items! <br>';

        //var_dump($sessionData['products']);

        foreach($sessionData as $index){
            print_r($sessionData['products']);
        }

        //for($i=0; $i<=0; $i++){
        //    print_r($sessionData['products']);
        //    echo ' ' . $i;
        //    echo '<br>';
        //}

        //dd($sessionData);
    }

    public function addToCart($request){
        $request->session()->push('products', 'item2');
    }

    public function clearCart($request){
        $request->session()->flush();
    }
}
