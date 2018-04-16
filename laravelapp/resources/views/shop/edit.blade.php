@extends('layouts.shopapp')

@section('title', '会員情報変更')

@section('menubar')
   @parent
   編集ページ
@endsection

@section('content')
<p>入力してください</p>
<p>※ログイン名は変更できません</p>
@if (isset($msg))
<p>{{$msg}}</p>
@endif
   <table>
   <form action="/shop/edit" method="post">
   {{ csrf_field() }}
   <input type="hidden" name="id" value="{{$form->id}}">
   <table>
     @php
       if(count($errors->get('name'))>0){
         $color="color:red";
       }else{
         $color="color:black";
       }
     @endphp
     <tr><th style={{$color}}>名前</th><td>: </th><td><input type="text" name="name"
    value="{{$form->name}}"></td></tr>
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
    <tr><th style={{$color}}>住所</th><td>: </th><td><input type="text" name="address"
    value="{{$form->address}}"></td></tr>
    @foreach ($errors->get('address') as $error)
      <tr align="left" style="font-size : 10px;"><th></th><th></th><th>※{{ $error }}</th></tr>
    @endforeach
    <tr><th>ログイン名</th><td>: </th><td>{{$form->login}}</td></tr>
    @php
      if(count($errors->get('password'))>0){
        $color="color:red";
      }else{
        $color="color:black";
      }
    @endphp
    <tr><th style={{$color}}>パスワード</th><td>: </th><td><input type="text" name="password"
    value="{{$form->password}}"></td></tr>
    @foreach ($errors->get('password') as $error)
      <tr align="left" style="font-size : 10px;"><th></th><th></th><th>※{{ $error }}</th></tr>
    @endforeach
    <tr><th></th><td></td><td><input type="submit"
    value="登録"></td></tr>
  </form>
  </table>
<a href="/shop/list?sort=id">商品一覧へ</a>

@endsection

@section('footer')
<p><a href="/shop/logoutcheck">ログアウト</a></p>
<p><a href="/shop/edit">会員情報変更</a></p>
TEST SHOP BOARD
@endsection
