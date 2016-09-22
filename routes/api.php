<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::get('/me', function (Request $request) {
        return $request->user();
    });

    Route::resources(['users' => 'UsersController']);
    Route::resources(['roles' => 'RolesController']);
});
