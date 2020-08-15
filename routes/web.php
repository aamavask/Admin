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
Route::post('/add_data', 'HomeController@prodinsert');
Route::get('/prodinfo', 'HomeController@prodinfo');
Route::get('/add-employee', 'HomeController@add_emp');
Route::get('/add-service', 'HomeController@service1');
Route::get('/show-all-products', 'HomeController@retrive');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-products', 'HomeController@add_products')->name('add products');

Route::get('/add-service-man', 'HomeController@add_serviceman');
Route::get('/add-deliverman', 'HomeController@add_deliverman');


Route::get('/add-vendor', 'HomeController@add_vendor');

Route::get('/add-serviceman', 'HomeController@service_man');





