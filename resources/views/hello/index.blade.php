<<<<<<< HEAD
@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
  @parent
  インデックスページ
@endsection

@section("content")
<p>ここが本文のコンテンツです</p>
@each("components.item", $data, "item")
@endsection

@section("footer")
copyright 2017 tuyano.
@endsection
=======
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
        font-size: 50pt;
        text-align: right;
        color: #f6f6f6;
        margin: -20px 0 -30px 0;
        letter-spacing: -4pt;
      }
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>&#064;whileディレクティブの例</p>
    <ol>
      @php
      $counter = 0;
      @endphp
      @while($counter < count($data))
      <li>{{$data[$counter]}}</li>
      @php
      $counter++;
      @endphp
      @endwhile
    </ol>
  </body>
</html>
>>>>>>> 6c71a5ff2cd979fdcae09971f60dbc1bdc291aa9
