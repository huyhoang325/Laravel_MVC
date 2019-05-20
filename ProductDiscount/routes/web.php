<?php

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
    return view('calculator');
});
Route::post('/' ,function(Illuminate\Http\Request $request){
	$ProductDescription = $request->description;
	$ListPrice = $request->price;
	$DiscountPercent = $request->percent / 100;

	$DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
	$DiscountPrice = $ListPrice - $DiscountAmount;
	return view('discount', compact(['ProductDescription','ListPrice','DiscountPercent', 'DiscountAmount', 'DiscountPrice']));
	// return response()->json(["ListPrice" => $DiscountAmount]);
});
