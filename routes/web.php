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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-products', 'HomeController@add_products')->name('add products');

Route::get('/add-cupons', 'HomeController@add_cupons')->name('add cupons');

Route::get('/add-customers', 'HomeController@add_customers')->name('add customers');





