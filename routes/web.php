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


Route::get('/', 'FrontViewController@index');
Route::get('/home', 'FrontViewController@index')->name('home');
Route::get('/test', 'FrontViewController@test')->name('test');




Route::get('/cart_add/{bookId}', 'OrderController@add')->name('cart_add');
Route::post('/cart_update/{rowId}', 'OrderController@update')->name('cart_update');
Route::get('/cart_item_delete/{rowId}', 'OrderController@cart_item_delete')->name('cart_item_delete');
//Route::get('/cart_checkout', 'OrderController@checkout')->name('cart_checkout');
Route::get('/cart_destroy', 'OrderController@destroy')->name('cart_destroy');

Route::get('/cart_view_and_edit', 'OrderController@cart_view_and_edit')->name('cart_view_and_edit');
Route::get('/cart_checkout_form', 'OrderController@cart_checkout_form')->name('cart_checkout_form');


Route::post('/checkout', 'OrderController@checkout')->name('checkout');



Route::post('/login_checout', 'OrderController@login_checout')->name('login_checout');


Auth::routes();

Route::get('/homeh', 'HomeController@index')->name('hhome');

