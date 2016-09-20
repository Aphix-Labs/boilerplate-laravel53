<?php

Route::get('/', function () {
    return view('public');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
/* Auth::routes(); */
