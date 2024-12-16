@extends('layouts.add')
<style>
  th {
    color: white;
    padding: 5px 40px;
  }


  td {
    padding: 25px 40px;
    text-align: center;
  }

  svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>

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
        <!-- 日付検索 -->
        <input type="date" name="date" value="{{ request('date') }}">
        <button type="submit">検索</button>
        <a href="{{ route('admin') }}" class="reset-button">リセット</a>
    </form>
 <!-- エクスポートボタン -->
    <button class="btn-export">エクスポート</button>
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
                <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
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
                <!-- 詳細ページに遷移する -->
                <td>
                    <a href="{{ route('admin', ['detail_id' => $contact->id]) }}" class="detail-button">詳細</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ページネーション -->
    <div class="pagination">
        {{ $contacts->links() }}
    </div>
    <!-- モーダルウィンドウ -->
    @if (request('detail_id'))
        @php
            $selectedContact = $contacts->where('id', request('detail_id'))->first();
        @endphp
        @if ($selectedContact)
        <div class="modal-overlay">
            <div class="modal-content">
                <button class="close-button" onclick="window.location='{{ route('admin') }}'">&times;</button>
                <table class="detail-table">
                    <tr><th>お名前</th><td>{{ $selectedContact->first_name }} {{ $selectedContact->last_name }}</td></tr>
                    <tr><th>性別</th><td>{{ $selectedContact->gender == 1 ? '男性' : ($selectedContact->gender == 2 ? '女性' : 'その他') }}</td></tr>
                    <tr><th>メールアドレス</th><td>{{ $selectedContact->email }}</td></tr>
                    <tr><th>住所</th><td>{{ $selectedContact->address }}</td></tr>
                    <tr><th>建物名</th><td>{{ $selectedContact->building }}</td></tr>
                    <tr><th>お問い合わせの種類</th><td>{{ $selectedContact->category_id }}</td></tr>
                    <tr><th>お問い合わせ内容</th><td>{{ $selectedContact->detail }}</td></tr>
                </table>
                <form method="POST" action="{{ route('contact.destroy', $selectedContact->id) }}" style="margin-top: 20px;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">削除</button>
            </div>
        </div>
        @endif
    @endif
</div>
@endsection
