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
Route::post('/add-products-data', 'HomeController@add_products_data');

Route::get('/add-employee', 'HomeController@add_emp');
Route::get('/add-service', 'HomeController@add_services');
Route::get('/add-vendor', 'HomeController@add_vendor');

Route::get('/add-service-man', 'HomeController@add_serviceman');
Route::post('/add-serviceman-data', 'HomeController@add_serviceman_data');

Route::get('/add-deliverman', 'HomeController@add_deliverman');

Route::get('/add-category', 'HomeController@add_category');
Route::post('/add-category-data', 'HomeController@add_category_data');

Route::get('/add-cupons', 'HomeController@add_cupons')->name('add cupons');
Route::get('/add-customers', 'HomeController@add_customers')->name('add customers');
