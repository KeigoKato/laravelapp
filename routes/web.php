<?php

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get("hello", "HelloController@index");
<<<<<<< HEAD
Route::post("hello", "HelloController@post");
=======
Route::get("hello/show", "HelloController@show");
Route::post("hello", "HelloController@post");
Route::get("hello/add", "HelloController@add");
Route::post("hello/add", "HelloController@create");
Route::get("hello/edit", "HelloController@edit");
Route::post("hello/edit", "HelloController@update");
Route::get("hello/del", "HelloController@del");
Route::post("hello/del", "HelloController@remove");
>>>>>>> C3_4_レイアウトの作成
