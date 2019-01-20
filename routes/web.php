<?php

use Illuminate\Support\Facades\Storage;

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

Route::get('/dash', 'DashboardController@index')->name('home');
Route::get('/about', 'BrochureController@about')->name('brochure.about');
Route::get('/contact', 'BrochureController@contact')->name('brochure.contact');
Route::get('/tenants', 'BrochureController@tenants')->name('brochure.tenants');
Route::get('/landlords', 'BrochureController@landlords')->name('brochure.landlords');
Route::get('/realtors', 'BrochureController@realtors')->name('brochure.realtors');

Route::get('/account/connect', 'Account\MarketplaceConnectController@index')->name('account.connect');
Route::get('/account/connect/complete', 'Account\MarketplaceConnectController@store')->name('account.complete');

Route::post('/payment/process/{listing}', 'Payment\PaymentProcessorController@store')->name('payment.process');

Route::resource('listings', 'ListingController')->middleware('auth');


Route::get('/testing', function() {

    $contents = Storage::get('avatars');
    dd($contents);
});