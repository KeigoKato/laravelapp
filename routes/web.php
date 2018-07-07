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


// getリクエスト先のアドレスに入力したmsgの値がヒアドキュメント内の$msgに反映される
Route::get("hello/{msg}", function($msg){
  $html = <<<EOF
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
    <style>
      body {
        font-size: 16pt;
        color: #999;
      }
      h1 {
        font-size: 100pt;
        text-align: right;
        color: #eee;
        margin: -40px 0 -50px 0;
      }
    </style>
  </head>
  <body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルで作ったページです。</p>
  </body>
</html>
EOF;

  return $html;
});
