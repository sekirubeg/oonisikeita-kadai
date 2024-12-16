@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
@section('content')
<div class="admin-container">
    <h1 class="admin-title">Admin</h1>

    <!-- 検索フォーム -->
    <form method="GET" action="{{ route('admin') }}" class="search-form">
        <input type="text" name="search" placeholder="名前やメールアドレスを入力してください" value="{{ request('search') }}">
        <select name="gender">
            <option value="">性別</option>
            <option value="1" {{ request('gender') == 1 ? 'selected' : '' }}>男性</option>
            <option value="2" {{ request('gender') == 2 ? 'selected' : '' }}>女性</option>
            <option value="3" {{ request('gender') == 3 ? 'selected' : '' }}>その他</option>
        </select>
        <select name="category_id">
            <option value="">お問い合わせの種類</option>
            <option value="1" {{ request('category_id') == 1 ? 'selected' : '' }}>商品のお届けについて</option>
            <option value="2" {{ request('category_id') == 2 ? 'selected' : '' }}>商品の交換について</option>
            <option value="3" {{ request('category_id') == 3 ? 'selected' : '' }}>商品トラブル</option>
            <option value="4" {{ request('category_id') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
            <option value="5" {{ request('category_id') == 5 ? 'selected' : '' }}>その他</option>
        </select>
        <button type="submit">検索</button>
        <a href="{{ route('contacts.index') }}" class="reset-button">リセット</a>
    </form>

    <!-- テーブル -->
    <table class="contact-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
                <td>
                    @if ($contact->gender == 1) 男性
                    @elseif ($contact->gender == 2) 女性
                    @else その他
                    @endif
                </td>
                <td>{{ $contact->email }}</td>
                <td>
                    @switch($contact->category_id)
                        @case(1) 商品のお届けについて @break
                        @case(2) 商品の交換について @break
                        @case(3) 商品トラブル @break
                        @case(4) ショップへのお問い合わせ @break
                        @default その他
                    @endswitch
                </td>
                <td><a href="#" class="detail-button">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ページネーション -->
    <div class="pagination">
        {{ $contacts->links() }}
    </div>
</div>
@endsection

