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
    return view('auth.login');
});

Route::resource('cliente','ClienteController');
Route::resource('producto','ProductoController');
Route::resource('ventas','VentaController');
Route::resource('stock','StockController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
