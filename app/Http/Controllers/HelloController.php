<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index() {
    $data = ["one", "two", "three", "four", "five"];
    return view("hello.index", ["data"=>$data]);
  }
  // POST送信するときはリクエストパラメータがあるはずだからRequestクラスのrequestインスタンスを引数に指定する
  public function post(Request $request) {
    // name属性がmsgのPOST値を取得する
    return view("hello.index", ["msg"=>$request->msg]);
  }
}
