<?php

Route::GET('/individual','BlackListController@individual');
Route::POST('/individual/search','BlackListController@individualSearch');

Route::GET('/institution','BlackListController@institution');