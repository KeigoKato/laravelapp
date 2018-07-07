<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  // クエリ文字列を受け取る場合はアクションメソッドの引数にRequestクラスのrequestインスタンスを渡す。
  public function index(Request $request) {
    $data = [
      // "キー名"クエリの中身はrequestメソッドの"キー名"プロパティに入っている
      "msg" => "これはコントローラから渡されたメッセージです。",
      "id" => $request->id,
    ];
    return view("hello.index", $data);
  }
}
