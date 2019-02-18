<?php

Route::auth();
Route::get('/logout', 'Auth\LoginController@logout');

# Setup Routes
Route::get('/setup', 'SetupController@index');
Route::post('/setup', 'SetupController@store');

# Application Routes
Route::middleware(['setup'])->group(function() {
    Route::get('/', 'PresentationsController@index');
    Route::post('/presentations', 'PresentationsController@store');
    Route::get('/presentations/create', 'PresentationsController@create');
    Route::get('/presentations/{presentation}/delete', 'PresentationsController@destroy')->middleware('auth');

    Route::get('/presentations/{presentation}/votes/create', 'VotesController@create');
    Route::get('/presentations/{presentation}/votes', 'VotesController@index');
    Route::post('/presentations/{presentation}/votes', 'VotesController@store');
});
