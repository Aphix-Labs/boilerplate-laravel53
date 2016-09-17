<?php

Route::get('/', function () {
    return view('app');
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
/* Auth::routes(); */
