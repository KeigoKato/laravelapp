<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
    return <<<EOF
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Hello/Index</title>
    <style>
      body {
        font-size: 16pt;
        color: #999;
      }
      h1 {
        font-size: 100pt;
        text-align: right;
        color: #999;
        margin: -40px 0 -50px 0;
      }
    </style>
  </head>
  <body>
    <h1>Index</h1>
    <p>これはHelloコントローラのindexアクションです。</p>
  </body>
</html>
EOF;
  }
}
?>
