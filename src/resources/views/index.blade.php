@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

        <div class="contact-form_content">
            <div class="contact-form_heading">
                <h2>Contact</h2>
            </div>

            <form action="/contacts/confirm" class="form" method="post">
                @csrf

                <!-- お名前 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">お名前</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                      <div class="input-wrapper">
                        <input type="text" name="first_name" placeholder="例 山田" class="form_input-half"   value="{{ old('first_name') }}">
                        @error('first_name')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="input-wrapper">
                        <input type="text" name="last_name" placeholder="例 太郎" class="form_input-half" value="{{ old('last_name') }}">
                        @error('last_name')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                </div>

                <!-- 性別 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">性別</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <label class="gender"><input type="radio" name="gender" value="男性" checked > 男性</label>
                        <label class="gender"><input type="radio" name="gender" value="女性"  >女性</label>
                        <label class="gender"><input type="radio" name="gender" value="その他"  > その他</label>
                        @error('gender')
                              <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- メールアドレス -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">メールアドレス</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                        @error('email')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 電話番号 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">電話番号</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <input type="tel" name="tel1" placeholder="080" class="form_input-tel" value="{{ old('tel1') }}">
                        @error('tel1')
                            <p class="form__error">{{ $message }}</p>
                        @enderror -
                        <input type="tel" name="tel2" placeholder="1234" class="form_input-tel" value="{{ old('tel2') }}">
                        @error('tel2')
                            <p class="form__error">{{ $message }}</p>
                        @enderror -
                        <input type="tel" name="tel3" placeholder="5678" class="form_input-tel" value="{{ old('tel3') }}">
                        @error('tel3')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 住所 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">住所</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                        @error('address')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 建物名 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">建物名</span>
                    </div>
                    <div class="form_group-content">
                        <input type="text" name="building" placeholder="例 千駄ヶ谷マンション101" value="{{ old('building') }}">
                        @error('building')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- お問い合わせの種類 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">お問い合わせの種類</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <select name="category_id" required class="select_box">
                            <option value="" disabled selected>選択してください</option>
                            <option value="1">商品のお届けについて</option>
                            <option value="2">商品の交換について</option>
                            <option value="3">商品トラブル</option>
                            <option value="4">ショップへのお問い合わせ</option>
                            <option value="5">その他</option>
                        </select>
                        @error('category_id')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <!-- お問い合わせ内容 -->
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label-item">お問い合わせ内容</span>
                        <span class="form_label-required">※</span>
                    </div>
                    <div class="form_group-content">
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                        @error('detail')
                            <p class="form__error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 確認ボタン -->
                <div class="form__button">
                    <button type="submit" class="form_button-submit">確認画面</button>
                </div>
            </form>
        </div>
@endsection
