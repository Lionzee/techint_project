<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('API')->group(function (){
    Route::post('register', 'UserController@register')->name('api_register');
    Route::post('login', 'UserController@login')->name('api_login');

    Route::get('user/{user_id}','UserController@getUserDetail')->name('api_user_detail');


    Route::get('product','ProductController@index')->name('api_product_index');

    Route::middleware('jwt.verify')->group(function (){
        Route::put('user','UserController@update')->name('api_user_update');

        //Product
        Route::post('product','ProductController@store')->name('api_product_store');
    });

});


