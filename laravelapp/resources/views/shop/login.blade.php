@extends('layouts.shopapp')

@section('title', 'ログイン')

@section('menubar')
   @parent
   ログインページ
@endsection

@section('content')

@if(isset($data))
@foreach($data as $data)
<p>{{$data['name']}}</p>
<p>{{$data['msg']}}</p>
<a href= {{$data['link1']}}>{{$data['link2']}}</a>
@endforeach
@endif

   <table>
   <form action="/shop/list" method="post">
      {{ csrf_field() }}
      <tr><th>ログイン名: </th><td><input type="text"
            name="login"></td></tr>
      <tr><th>パスワード: </th><td><input type="password"
            name="password"></td></tr>
      <tr><th></th><td><input type="submit"
            value="ログイン"></td></tr>
   </form>
   </table>
</br>
</br<
<p><a href="/shop/register">会員登録へ</a></p>
@endsection

@section('footer')

<p><a href="/shop/edit">会員情報変更</a></p>
copyright 2017 tuyano.
@endsection
