<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class Cart extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function recieveItems($id)
    {
        print 'You tried to recieve: ' . $id;
        
        return redirect()->back();
    }
}
