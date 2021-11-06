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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos','ProductoController@index')->name('getAllProductos');
Route::post('productos','ProductoController@create')->name('addProductos');
Route::get('productos/{id}','ProductoController@getProducto')->name('getProductos');
Route::post('productos/{id}','ProductoController@update')->name('editProductos');
Route::get('productos/delete/{id}','ProductoController@destroy')->name('deleteProductos');

Route::get('carrito','CarritoController@index')->name('getAllCarrito');
Route::post('carrito','CarritoController@create')->name('addCarrito');
Route::get('carrito/{id}','CarritoController@getProducto')->name('getCarrito');
Route::get('carrito/delete/{id}','CarritoController@destroy')->name('deleteCarrito');
