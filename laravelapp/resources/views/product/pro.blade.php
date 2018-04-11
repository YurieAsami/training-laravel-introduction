@extends('layouts.shopapp')
<style>
   .pagination { font-size:10pt; }
   .pagination li { display:inline-block }
</style>
@section('title', 'Product')


@section('menubar')

   商品詳細
@endsection

@section('content')

<p>商品番号：{{$item->id}}</p>
<p>商品名　：{{$item->name}}</p>
<p>価格　　：{{$item->price}}円</p>

<form action="/shop/fav?id={{$item->id}}" method="post">
{{ csrf_field() }}
<input type="submit" value="お気に入り登録する">
</form>

<form action="/shop/cart?id={{$item->id}}" method="post">
{{ csrf_field() }}
個数：<select name="count">
  @for($i=1;$i<=10;$i++)
  <option value="{{$i}}">{{$i}}</option>
  @endfor
</select>
<input type="submit" value="カートに入れる">
</form>
@endsection

@section('footer')
<a href="/shop/list?sort=id">商品一覧へ</a>
TEST SHOP BOARD
@endsection
