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
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/','FrontendController@index')->name('index');
Route::get('/product/{id}','FrontendController@viewProduct')->middleware('auth')->name('product.item');
Route::post('/product/order','FrontendController@orderProduct')->middleware('auth')->name('product.order');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
