@extends('layouts.shopapp')
<style>
   .pagination { font-size:14pt; }
   .pagination li { display:inline-block }
</style>
@section('title', 'SHOP HOME')

@section('menubar')
   商品一覧
@endsection

@section('content')
<p>{{$name}}様</p>
  <li><a href="/shop/fav">お気に入り</a></li>
  <li><a href="/shop/cart">カート</a></li>
  <li><a href="/shop/history">購入履歴</a></li>
<div align="center">
  @if(isset($msg))
    {{$msg}}
  @else
  ようこそ
  @endif
</div>
  <form action="/shop/find" method="post" align="right">
     {{ csrf_field() }}
     <input type="text" name="input">
     <input type="submit" value="検索">
     </form>
</br>
@if(isset($seachs))
<div align="center">
  <p>検索結果</p>
  <table width="380">
    <tr><th>番号</th><th>商品名</th><th>金額</th></tr>
  @foreach ($seachs as $seach)
    <tr>
    <td style="font-size : 20px">{{$seach->id}}</td>
    <td style="font-size : 21px">
      <a href="/shop/pro?id={{$seach->id}}">{{$seach->name}}</a></td>
    <td style="font-size : 21px;">{{$seach->price}}</td>
    </tr>
  @endforeach
  </table>
</div>
</br>
</br>
@endif
<div align="center">
  <table width="380">
    <tr>
    <th>番号<a href="/shop/list?sort=idup">▲<a href="/shop/list?sort=id">▼</a></th>
    <th>商品名</th>
    <th>金額<a href="/shop/list?sort=priceup">▲</a><a href="/shop/list?sort=price">▼</a></th>
    </tr>
  @foreach ($items as $item)
    <tr>
    <td style="font-size : 18px">{{$item->id}}</td>
    <td style="font-size : 19px">
      <a href="/shop/pro?id={{$item->id}}">{{$item->name}}</a></td>
    <td style="font-size : 18px;">{{$item->price}}</td>
    </tr>
  @endforeach
  </table>
  {{$items->appends(['sort'=>$sort])->links()}}
</div>
@endsection

@section('footer')
<p><a href="/shop/edit">会員情報変更</a></p>
<p><a href="/shop/logoutcheck">ログアウト</a></p>
<p>※ログアウトするとカートの内容は消えてしまいます</p>
@endsection
