<?php

Route::get('/vendor/create', 'VendorController@create')->name('vendorCreate');
Route::post('/vendor', 'VendorController@store')->name('vendorStore');