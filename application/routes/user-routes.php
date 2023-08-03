<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/v1/dewtech')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/', 'Users\UserController@index');
        Route::post('/', 'Users\UserController@store');
        Route::get('/{id}', 'Users\UserController@show');
        Route::put('/{id}', 'Users\UserController@update');
        Route::delete('/{id}', 'Users\UserController@destroy');
    });
});
