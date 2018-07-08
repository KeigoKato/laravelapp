<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  // クエリ文字列を受け取る場合はアクションメソッドの引数にRequestクラスのrequestインスタンスを渡す。
  public function index(Request $request) {
    $data = [
      ["name"=>"山田たろう", "mail"=>"taro@yamada"],
      ["name"=>"田中はなこ", "mail"=>"hanako@flower"],
      ["name"=>"鈴木さちこ", "mail"=>"sachiko@happy"],
    ];
    return view("hello.index", ["data"=>$data]);
  }
}
