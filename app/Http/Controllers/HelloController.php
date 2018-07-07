<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  // RequestクラスのrequestインスタンスとResponseクラスのresponseインスタンスを引数に置くことでフォームのパラメータを受け取る
  public function index(Request $request, Response $response) {
    $html = <<<EOF
<!DOCTYPE html>
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
        font-size: 120pt;
        text-align: right;
        color: #fafafa;
        margin: -50px 0 -120px 0;
      }
    </style>
  </head>
  <body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
  </body>
</html>
EOF;
    $response->setContent($html);
    return $response;
  }
}
