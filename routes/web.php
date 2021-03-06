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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', 'AboutController@index');

Route::get('/contact-us', 'ContactController@index');

Route::get('/payment-proof', 'PaymentProofController@index');

Route::get('/buy-bitcoin', 'BuyBitcoinController@index');
