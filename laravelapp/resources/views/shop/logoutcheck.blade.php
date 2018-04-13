@extends('layouts.shopapp')

@section('title', 'logout')


@section('menuber')
ログアウト確認
@endsection

@section('content')
<br>
<p>本当にログアウトしますか？</p>
<p>（ログアウトするとカートの内容は消えてしまいます）</p>
<p><a href="/shop/logout">はい</a></p>
</br>
</br>
<p><a href="/shop/list?sort=id">商品一覧へ戻る</a></p>

@endsection

@section('footer')

TEST SHOP BOARD
@endsection
