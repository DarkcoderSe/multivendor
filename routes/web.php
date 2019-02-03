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

Route::get('/', 'Controller@welcome');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user'], function () {
    Route::post('/add_to_cart', 'UserController@add_to_cart');
    Route::get('/get_from_cart', 'UserController@get_from_cart');
    Route::get('/delete_from_cart/{id}', 'UserController@delete_from_cart');
    Route::get('/checkout', 'UserController@cart_checkout');
    Route::post('/checkout', 'UserController@cart_checkout_submit');
});

Route::group(['prefix' => 'seller'], function () {
    Route::get('/', 'SellerController@index');

    //product crud
    Route::get('/product', 'SellerController@product');
    Route::get('/product/new', 'SellerController@product_new');
    Route::get('/product/edit/{id}', 'SellerController@product_edit');
    Route::get('/product/delete/{id}', 'SellerController@product_delete');
    Route::post('/product/submit', 'SellerController@product_submit');
    Route::post('/product/update', 'SellerController@product_update');

    //orders
    Route::get('/orders', 'SellerController@orders');
    Route::get('/order/{id}', 'SellerController@order');
    Route::get('/order/delivered', 'SellerController@order_delivered');

});
