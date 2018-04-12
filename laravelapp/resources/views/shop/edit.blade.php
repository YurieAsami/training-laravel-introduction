@extends('layouts.shopapp')

@section('title', '会員情報変更')

@section('menubar')
   @parent
   編集ページ
@endsection

@section('content')
   @if (count($errors) > 0)
   <div>
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif

<p>入力してください</p>
<p>※ログイン名は変更できません</p>
   <table>
   <form action="/shop/edit" method="post">
   {{ csrf_field() }}
   <input type="hidden" name="id" value="{{$form->id}}">
   <table>
   <tr><th>お名前: </th><td><input type="text" name="name"
    value="{{$form->name}}"></td></tr>
   <tr><th>住所: </th><td><input type="text" name="address"
    value="{{$form->address}}"></td></tr>
   <tr><th>ログイン名: </th><td>{{$form->login}}</td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password"
    value="{{$form->password}}"></td></tr>
    <tr><th></th><td><input type="submit"
    value="登録"></td></tr>
    </form>
    </table>

<a href="/shop/list?sort=id">商品一覧へ</a>

@endsection

@section('footer')
<p><a href="/shop/logout">ログアウト</a></p>
<p><a href="/shop/edit">会員情報変更</a></p>
copyright 2017 tuyano.
@endsection
