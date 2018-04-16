@extends('layouts.shopapp')

@section('title', 'Product')

@section('menubar')
   お気に入り
@endsection

@section('content')
  <li><a href="/shop/cart">カート</a></li>
  <li><a href="/shop/history">購入履歴</a></li>
@if (isset($msg))
  <p>{{$msg}}</p>
@endif

<table>
<tr><th>商品番号</th><th>商品名</th></tr>

@foreach ($products as $product)

  @if($product->product_id=$customer_id)
  <tr><td>{{$product->product->id}}</td>
  <td><a href="/shop/pro?id={{$product->product->id}}">
  {{$product->product->name}}</a></td>
  <td>
  <form action="/shop/fav/drop" method="post">
    {{ csrf_field() }}
  <div><input name="user" type="hidden" value="{{$customer_id}}"></div>
  <div><input name="product" type="hidden" value="{{$product->product->id}}"></div>
  <div><input type="submit" value="削除"></div></form>
  </td>
  </tr>
  @endif
@endforeach
</table>
</br>
</br>
<p><a href="/shop/list?sort=id">商品一覧へ</a></p>
@endsection

@section('footer')
<p><a href="/shop/fav/drop">お気に入りの中身を空にする</a></p>

TEST SHOP BOARD
@endsection
