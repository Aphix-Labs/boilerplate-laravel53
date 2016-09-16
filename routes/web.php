<?php

Route::get('/', function () {
    return view('app');
});

Route::get('/home', 'HomeController@index');

/* Auth::routes(); */

Route::post('login', 'Auth\LoginController@login');
