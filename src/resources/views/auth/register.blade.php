<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> <!-- 外部CSSをリンク -->
</head>
<body>
    <div class="register-container">
        <header class="header">
            <h1 class="title">FashionablyLate</h1>
            <a href="/login" class="login-link">login</a>
        </header>

        <div class="form-container">
            <h2 class="form-title">Register</h2>
            <form method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">お名前</label>
                    <input id="name" type="text" name="name" class="form-input" placeholder="例: 山田 太郎" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input id="email" type="email" name="email" class="form-input" placeholder="例: test@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">パスワード</label>
                    <input id="password" type="password" name="password" class="form-input" placeholder="例: coachtech06" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">パスワード確認</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required>
                </div>

                <button type="submit" class="form-button">登録</button>
            </form>
        </div>
    </div>
</body>
</html>
