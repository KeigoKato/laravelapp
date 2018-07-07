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
    <!-- <p><?php echo $msg; ?></p> と書いてもBladeで書いても同じこと-->
    <p>{{$msg}}</p>
    <form class="" action="/hello" method="post">
      <!-- フォームタグの下には必ずcsrf対策用のヘルパーメソッドを指定する -->
      {{csrf_field()}}
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>
