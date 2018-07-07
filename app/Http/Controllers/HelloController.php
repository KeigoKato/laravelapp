<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index() {
    $data = [
      "msg" => "これはBladeを利用したサンプルです",
    ];
    return view("hello.index", $data);
  }
  // POST送信するときはリクエストパラメータがあるはずだからRequestクラスのrequestインスタンスを引数に指定する
  public function post(Request $request) {
    // name属性がmsgのPOST値を取得する
    $msg = $request->msg;
    $data =[
      "msg" => "こんにちは、".$msg."さん！",
    ];
    return view("hello.index", $data);
  }
}
