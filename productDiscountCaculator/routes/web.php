<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discount_calculator', function () {
    return view('display_discount_calculator');
});

Route::post('/discount_calculator', function (\Illuminate\Http\Request $request){
    $productDescription = $request->input('product');
    $listPrice = $request->input('price');
    $discountPercent = $request->input('discount');
    $discountAmount = (($listPrice * $discountPercent)/100)* 0.1;
    $discountPrice = $listPrice - $discountAmount;
    return view('show_discount_amount', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));
});
