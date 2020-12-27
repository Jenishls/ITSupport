<?php

Route::get('/bill/create/{id}', 'BillController@create')->name('createBill');
Route::post('/bill', 'ProductController@store')->name('storeBill');
Route::get('/bill/{id}', 'BillController@show')->name('showBill');
Route::get('/bill/edit/{id}','BillController@edit')->name('editBill');
Route::post('/bill/edit','BillController@update')->name('updateBill');
Route::get('/bill/{vendor_id}/delete/{id}','BillController@destroy')->name('deleteBill');
Route::post('/bill/upload','BillController@upload')->name('uploadBill');
