<?php

Route::get('/product/create/{id}', 'ProductController@create')->name('createProduct');
Route::post('/product', 'ProductController@store')->name('storeProduct');
Route::get('/product/{id}', 'ProductController@show')->name('showProduct');
Route::get('/product/edit/{id}','ProductController@edit')->name('editProduct');
Route::post('/product/edit','ProductController@update')->name('updateProduct');
Route::get('/product/delete/{id}','ProductController@destroy')->name('deleteProduct');