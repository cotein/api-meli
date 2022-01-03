<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'Auth\AuthController@login');
Route::post('signup', 'Auth\AuthController@signUp');
