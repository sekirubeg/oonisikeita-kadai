<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- CSSファイルをリンク -->
</head>
<body>
    <div class="login-container">
        <header class="header">
            <h1 class="title">FashionablyLate</h1>
            <div class="header-menu">
                <a href="/register" class="register-link">register</a>
                <button class="menu-button">...</button>
            </div>
        </header>

        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input id="email" type="email" name="email" class="form-input" placeholder="例: test@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">パスワード</label>
                    <input id="password" type="password" name="password" class="form-input" placeholder="例: coachtech1106" required>
                </div>

                <button type="submit" class="form-button">ログイン</button>
            </form>
        </div>
    </div>
</body>
</html>
