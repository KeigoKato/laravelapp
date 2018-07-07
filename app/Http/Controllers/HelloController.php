<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  // シングルアクションコントローラのメソッド名は__invokeとするのが決まり
  public function __invoke() {
    return <<<EOF
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
        font-size: 30pt;
        text-align: right;
        color: #eee;
        margin: -15px 0 0 0;
      }
    </style>
  </head>
  <body>
    <h1>Single Action</h1>
    <p>これはシングルアクションコントローラです。</p>
  </body>
</html>
EOF;
  }
}
