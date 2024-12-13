<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact From</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a href="" class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
      <div class="contact-form_content">

        <div class="contact-form_heading">
          <h2>Contact</h2>
        </div>

        <form action="/contacts/confirm" class="form" method="post">
          @csrf
          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">お名前</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-text">
                <input type="text" name="first_name" placeholder="例 山田">
                <input type="text" name="last_name" placeholder="例 太郎">
              </div>
              <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              </div>
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">性別</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-radio">
                <input type="radio" name="gender" value="男" checked> 男性
                <input type="radio" name="gender" value="女" > 女性
                <input type="radio" name="gender" value="その他"> その他
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">メールアドレス</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-text">
                <input type="email" name="email" placeholder="test@example.com">
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">電話番号</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-text">
                <input type="tel" name="tel1" placeholder="080">
                -
                <input type="tel" name="tel2" placeholder="1234">
                -
                <input type="tel" name="tel3" placeholder="5678">
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">住所</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-text">
                <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">建物名</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-text">
                <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">お問い合わせの種類</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-select">
                <select name="category_id">
                  <option value="1">商品について</option>
                  <option value="2">配送について</option>
                  <option value="3">キャンセル・返品について</option>
                  <option value="4">その他</option>
                </select>
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form_group">
            <div class="form_group-title">
              <span class="form_label-item">お問い合わせ内容</span>
              <span class="form_label-required">※</span>
            </div>
            <div class="form_group-content">
              <div class="form_input-textarea">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>

          <div class="form__button">
            <button class="form_button-submit" type="submit">確認画面</button>
          </div>

        </form>
      </div>
    </main>
</body>
</html>