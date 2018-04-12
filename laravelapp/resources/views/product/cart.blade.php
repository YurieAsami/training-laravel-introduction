@extends('layouts.shopapp')
<style>
   .pagination { font-size:10pt; }
   .pagination li { display:inline-block }
</style>
@section('title', 'Product')

@section('menubar')
   カート
@endsection

@section('content')

@if (isset($msg))
  <p>{{$msg}}</p>
@endif

@if (NUll!==$products)
<table>
<tr><th>商品番号</th><th>商品名</th>
<th>価格</th><th>個数</th><th>小計</th></tr>
@php
$total=0;
$number =-1;
@endphp
@foreach ($products as $product)
    <tr><td>{{$product[0]}}</td>
        <td>{{$product[1]}}</td>
        <td>({{$product[2]}}円)</td>
        <td>：{{$product[3]}}点</td>
        <td>
        @php
        $number+=1;
        print $product[2]*$product[3]."円";
        $total += ($product[2]*$product[3]);
        @endphp
      </td>
      <td>
         <form action="/shop/cart/add" method="post">
           {{ csrf_field() }}
        <div><input name="number" type="hidden" value="{{$number}}"></div>
        <div><input name="id" type="hidden" value="{{$product[0]}}"></div>
        <div><input name="name" type="hidden" value="{{$product[1]}}"></div>
        <div><input name="price" type="hidden" value="{{$product[2]}}"></div>
        <div><input name="count" type="hidden" value="{{$product[3]}}"></div>
        <div><input type="submit" value="削除"></div></form>
      </td>
    </tr>
@endforeach
<tr><th>合計：</th><th>{{$total}}円</th></tr>
</table>
</br>
<a href="/shop/list?sort=id">買い物を続ける</a>
</br>
</br>
<p><a href="/shop/sub/purchase">購入する</a></p>

@else
<p>カートに商品がありません。</p>
@endif

@endsection

@section('footer')
<p><a href="/shop/cart/drop">カートの中身を空にする</a></p>
<p><a href="/shop/list?sort=id">商品一覧へ</a></p>
TEST SHOP BOARD
@endsection
