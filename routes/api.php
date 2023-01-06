<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('Store_product', 'App\Http\Controllers\ProductController@store');
Route::post('Store_unit', 'App\Http\Controllers\UnitController@store');
Route::post('Store_productUnit', 'App\Http\Controllers\InventoryController@store');

Route::get('Get_total/{product_id}', 'App\Http\Controllers\ProductController@show_total');

Route::get('Get_total_by_unit/{product_id}', 'App\Http\Controllers\ProductController@show_total_amount_by_unit');

Route::post('Store_Img_Info', 'App\Http\Controllers\ImageController@store');

Route::get('Get_product&image_path/{product_id}', 'App\Http\Controllers\ProductController@show_product');

Route::get('Get_user&image_path/{user_id}', 'App\Http\Controllers\UserController@show_user');



//////////////
Route::get('Get_product/{product_id}', 'App\Http\Controllers\ProductController@test');
