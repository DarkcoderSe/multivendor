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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'seller'], function () {
    Route::get('/', 'SellerController@index');

    //product crud
    Route::get('/product', 'SellerController@product');
    Route::get('/product/new', 'SellerController@product_new');
    Route::get('/product/edit/{id}', 'SellerController@product_edit');
    Route::get('/product/delete/{id}', 'SellerController@product_delete');

    Route::post('/product/submit', 'SellerController@product_submit');
    Route::post('/product/update', 'SellerController@product_update');

});
