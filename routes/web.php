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

Auth::routes();

Route::get('/homeh', 'HomeController@index')->name('hhome');

