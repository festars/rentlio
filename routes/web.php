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

Route::get('/account/connect', 'Account\MarketPlaceConnectController@index')->name('account.connect');
Route::get('/account/connect/complete', 'Account\MarketPlaceConnectController@store')->name('account.complete');

Route::resource('listings', 'ListingController')->middleware('auth');