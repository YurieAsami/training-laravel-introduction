@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
   @parent
   ユーザー認証ページ
@endsection

@section('content')

   <table>
   <form action="/shop/auth" method="post">
      {{ csrf_field() }}
      <tr><th>loginname: </th><td><input type="text"
            name="loginname"></td></tr>
      <tr><th>pass: </th><td><input type="password"
            name="password"></td></tr>
      <tr><th></th><td><input type="submit"
            value="send"></td></tr>
   </form>
   </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
