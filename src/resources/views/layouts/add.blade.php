<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>
<body>
   <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">FashionablyLate</a>
        </div>
        @if (Auth::check())
        <li class="header-nav__item">
            <form action="/logout" method="post">
            @csrf
            <button class="header-nav__button">ログアウト</button>
            </form>
        </li>
        @endif
    </header>

    <main>
        @yield('content')
    </main>



</body>
</html>