<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', 'UserController@index');
//Route::get('/user/{user}', 'UserController@show');
//Route::get('/user/{user}/edit', 'UserController@edit');
//Route::get('/user/{user}/update', 'UserController@update');
Route::resource('user','UserController');
//All resource routes for PostOfficesController
Route::resource('postoffices','PostOfficesController');

// Routes added with artisan command make:auth
Auth::routes();

Route::get('/profile', 'ProfileController@index');
