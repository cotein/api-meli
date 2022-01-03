<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'auth'], function () {

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');
    });
});


Route::get('products', 'Api\ProductController@index');
Route::get('products/{product_id}', 'Api\ProductController@show');
