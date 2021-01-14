<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cart;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/recieveItems/{item}', [Cart::class, 'recieveItems']);


Route::get('/', function () {
    return view('home');
});

Route::get('/categories', function() {
    return view('categories');
});

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
Route::get('/category1', function(){
    return view('categories/category1');
});
Route::get('/category2', function(){
    return view('categories/category2');
});
Route::get('/category3', function(){
    return view('categories/category3');
});
Route::get('/category4', function(){
    return view('categories/category4');
});
Route::get('/category5', function(){
    return view('categories/category5');
});
