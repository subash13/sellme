<?php


Route::get('/', 'HomeController@index')->middleware('auth','admin')->name('admin.index');
/*Product CRUD*/
Route::resource('product', 'ProductController');
Route::resource('order', 'OrderController');


