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
<p>{{$nam}}様</p>
  <li><a href="/shop/fav">お気に入り</a></li>
  <li><a href="/shop/cart">カート</a></li>
</br>
<div align="center">
  @if(isset($msg))
    {{$msg}}
  @else
  ようこそ
  @endif
</div>
</br>
<div align="center">
  <table width="300">
    <tr>
    <th><a href="/shop/list?sort=id">番号</a></th>
    <th><a href="/shop/list?sort=name">商品名</a></th>
    <th><a href="/shop/list?sort=price">金額</a></th>
    </tr>
  @foreach ($items as $item)
    <tr>
    <td style="font-size : 20px">{{$item->id}}</td>
    <td style="font-size : 23px">
      <a href="/shop/pro?id={{$item->id}}">{{$item->name}}</a></td>
    <td style="font-size : 21px;">{{$item->price}}</td>
    </tr>
  @endforeach
  </table>
  {{$items->appends(['sort'=>$sort])->links()}}
</div>
@endsection

@section('footer')
<p><a href="/shop/edit">会員情報変更</a></p>
<p><a href="/shop/logout">ログアウト</a></p>
<p>※ログアウトするとカートの内容は消えてしまいます</p>
@endsection
