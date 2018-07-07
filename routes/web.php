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

// ルートアドレスにgetリクエストでアクセスしたらviewのwelcomeファイルを選択する。
Route::get('/', function () {
    return view('welcome');
});

// /helloにアクセスするとreturnで返されるHTMLを出力する。
// Route::get("hello", function() {
//   return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// helloにgetリクエストするとHelloContorollerのindexアクションを実行する。
// ルーティングでviewを作成するような処理は書かないのがMVCの基本のひとつ。
// /hello/123/456とアドレスを指定すれば123と456が変数に入る
Route::get("hello/{id?}/{pass?}", "HelloController@index");
