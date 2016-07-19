<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/api/contact', ['as' => 'contact', 'uses' => 'MessageController@store']);
