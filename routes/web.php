<?php

Route::get('/', 'PresentationsController@index');
Route::post('/presentations', 'PresentationsController@store');
Route::get('/presentations/create', 'PresentationsController@create');

Route::get('/presentations/{id}/votes/create', 'VotesController@create');
Route::get('/presentations/{id}/votes', 'VotesController@index');
Route::post('/presentations/{id}/votes', 'VotesController@store');




