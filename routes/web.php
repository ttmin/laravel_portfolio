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

Route::get('/', 'ShopController@index');
Route::group(['middleware' => ['auth']], function() {
	Route::get('/mycart', 'ShopController@myCart');
	Route::post('/mycart', 'ShopController@addMyCart');
	Route::post('/cartdelete', 'ShopController@deleteMyCart');
	Route::post('/checkout', 'ShopController@checkout');
});

Auth::routes();

Route::get('/login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/home', 'HomeController@index')->name('home');
