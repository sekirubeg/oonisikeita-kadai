<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>管理画面</h1>
    <p>ようこそ、管理画面へ！</p>
    <ul class="header-nav">
 @if (Auth::check())
  <li class="header-nav__item">
    <form action="/logout" method="post">
      @csrf
      <button class="header-nav__button">ログアウト</button>
    </form>
  </li>
 @endif
</body>
</html>