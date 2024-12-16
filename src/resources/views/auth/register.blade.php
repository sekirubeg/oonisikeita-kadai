<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">FashionablyLate</a>
            <a href="/login" class="login-link">login</a>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <div class="register-container">
            <div class="form-container">
                <h2 class="form-title">Register</h2>
                <form method="POST" action="/register">
                    @csrf
                    <!-- 名前 -->
                    <div class="form-group">
                        <label for="name" class="form-label">お名前</label>
                        <input id="name" type="text" name="name" class="form-input" placeholder="例: 山田 太郎" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- メールアドレス -->
                    <div class="form-group">
                        <label for="email" class="form-label">メールアドレス</label>
                        <input id="email" type="email" name="email" class="form-input" placeholder="例: test@example.com" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- パスワード -->
                    <div class="form-group">
                        <label for="password" class="form-label">パスワード</label>
                        <input id="password" type="password" name="password" class="form-input" placeholder="例: coachtech1106" required>
                        @error('first_name')
                        <p class="password">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- 登録ボタン -->
                    <button type="submit" class="form-button">登録</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
