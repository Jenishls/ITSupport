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

// Route::get('/', 'HomeController@');

Auth::routes();

Route::get('/', 'Vendor\VendorController@index')->name('home');

Route::get('/user/create', 'HomeController@createUser')->name('createUser');
Route::POST('/user/create', 'HomeController@storeUser')->name('storeUser');
Route::get('/user/list', 'HomeController@listUser')->name('listUser');
Route::get('/user/{user}', 'HomeController@editUser')->name('editUser');
Route::POST('/user/update', 'HomeController@updateUser')->name('updateUser');
Route::POST('/user/passwordReset', 'HomeController@passwordReset')->name('passwordReset');



