<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- CSSファイルをリンク -->
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">FashionablyLate</a>
            <a href="/register" class="register-link">register</a>
        </div>
    </header>
    <main>
      <div class="login-container">
        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input id="email" type="email" name="email" class="form-input" placeholder="例: test@example.com" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="form__error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">パスワード</label>
                    <input id="password" type="password" name="password" class="form-input" placeholder="例: coachtech1106" required>
                    @error('password')
                        <p class="form__error">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="form-button">ログイン</button>
            </form>
         </div>
        </div>
      </div>
    </main>
</body>
</html>
