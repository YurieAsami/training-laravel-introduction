@extends('layouts.shopapp')
@section('title', '登録')
@section('menubar')
   登録ページ
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <tr><th>ERROR:</th><th>{{ $error }}</th></tr></br>
        @endforeach
    </ul>
</div>
@endif
@if (null !==(session()->get('id')))
<p>登録完了</p>
<a href="/shop/list?sort=id">商品一覧へ</a>
@else
@if(isset($msg))
<p>{{$msg}}</p>
@else
  <p>このログイン名はすでに使われています</p>
@endif
<table>
<form action="/shop/register" method="post">
    {{ csrf_field() }}
    <tr><th>名前: </th><td><input type="text" name="name"
        value="{{old('name')}}"></td></tr>
    <tr><th>住所: </th><td><input type="text" name="address"
        value="{{old('address')}}"></td></tr>
    <tr><th>ログイン名: </th><td><input type="text" name="login"
        value="{{old('login')}}"></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password"
            value="{{old('password')}}"></td></tr>
    <tr><th></th><td><input type="submit"
        value="登録"></td></tr>
</form>
</table>
@endif
@endsection
@section('footer')
<p><a href="/shop/login">ログインページへ</a></p>

TEST SHOP BOARD
@endsection
