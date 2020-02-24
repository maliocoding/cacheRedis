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


use Illuminate\Support\Facades\Redis;
Route::get('/', function () {
    $p = Redis::incr('p');
    return $p;
});

Route::get("cache", "UserController@index");
Route::get("query", "UserController@getUser");