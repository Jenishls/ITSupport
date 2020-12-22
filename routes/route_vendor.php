<?php

Route::get('/vendor/create', 'VendorController@create')->name('createVendor');
Route::post('/vendor', 'VendorController@store')->name('storeVendor');
Route::get('/vendor/{id}', 'VendorController@show')->name('showVendor');
Route::get('/vendor/edit/{id}','VendorController@edit')->name('editVendor');
Route::post('/vendor/edit','VendorController@update')->name('updateVendor');
Route::get('/vendor/delete/{id}','VendorController@destroy')->name('deleteVendor');