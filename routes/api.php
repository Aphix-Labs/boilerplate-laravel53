<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
