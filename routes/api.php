<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['auth:api', 'admin'], 'namespace' => 'Api'], function () {
    Route::get('/me', function (Request $request) {
        return $request->user();
    });

    Route::resources(['users' => 'UsersController']);
    Route::resources(['roles' => 'RolesController']);
    Route::get('permissions', 'PermissionsController@index');
});
