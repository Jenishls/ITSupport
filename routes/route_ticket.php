<?php

Route::GET('/ticket/closed','TicketController@closed');
Route::get('/ticket/create', 'TicketController@create')->name('ticketCreate');
Route::post('/ticket', 'TicketController@store')->name('ticketStore');
Route::get('/ticket/{ticket}','TicketController@show')->name('showTicket');
Route::POST('/ticket/complete','TicketController@update')->name('updateTicket');
Route::POST('/ticket/process','TicketController@updateProcess')->name('updateTicket');




