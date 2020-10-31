<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/todo','TodoController@home');

Route::get('/show/{todo}','TodoController@show');

Route::get('/delete/{todo}','TodoController@destroy');

//Route::get('/delete/{todo}','TodoController@edit');