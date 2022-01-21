<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/create" method="post">
    @csrf
    <label for="name">氏名</label><br>
    <input type="txt" name="name"><br>
    <label for="email">メールアドレス</label><br>
    <input type="email" name="email"><br>
    <button>送信する</button>
  </form>
</body>
</html>