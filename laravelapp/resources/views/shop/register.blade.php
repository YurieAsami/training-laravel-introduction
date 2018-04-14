@extends('layouts.shopapp')
@section('title', '登録')
@section('menubar')
   登録ページ
@endsection

@section('content')

@if (null !==(session()->get('id')))
  <p>登録完了</p>
  <a href="/shop/list?sort=id">商品一覧へ</a>
@elseif ((count($errors)>0) OR isset($msg))
<p>{{$msg}}</p>
<table>
<form action="/shop/register" method="post">
  {{ csrf_field() }}
  @php
    if(count($errors->get('name'))>0){
      $color="color:red";
    }else{
      $color="color:black";
    }
  @endphp
  <tr><th style={{$color}}>名前</th><th>:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
  @foreach ($errors->get('name') as $error)
    <tr align="left" style="font-size : 10px;" ><th></th><th></th><th>※{{ $error }}</th></tr>
  @endforeach
  @php
    if(count($errors->get('address'))>0){
      $color="color:red";
    }else{
      $color="color:black";
    }
  @endphp
  <tr><th style={{$color}}>住所</th><th>: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
  @foreach ($errors->get('address') as $error)
    <tr align="left" style="font-size : 10px;"><th></th><th></th><th>※{{ $error }}</th></tr>
  @endforeach
  @php
    if(count($errors->get('login'))>0){
      $color="color:red";
    }else{
      $color="color:black";
    }
  @endphp
  <tr><th style={{$color}}>ログイン名</th><th>: </th><td><input type="text" name="login" value="{{old('login')}}"></td></tr>
  @foreach ($errors->get('login') as $error)
    <tr align="left" style="font-size : 10px;"><th></th><th></th><th>※{{ $error }}</th></tr>
  @endforeach
  @php
    if(count($errors->get('password'))>0){
      $color="color:red";
    }else{
      $color="color:black";
    }
  @endphp
  <tr><th style={{$color}}>パスワード</th><th>: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
  @foreach ($errors->get('password') as $error)
    <tr align="left" style="font-size : 10px;"><th></th><th></th><th>※{{ $error }}</th></tr>
  @endforeach
  <tr><th></th><th></th><td><input type="submit"
        value="登録"></td></tr>
</form>
</table>
@endif
@endsection
@section('footer')
<p><a href="/shop/login">ログインページへ</a></p>

TEST SHOP BOARD
@endsection
