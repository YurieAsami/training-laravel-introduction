@extends('layouts.shopapp')

@section('title', '注文確定')

@section('menubar')
   注文確定画面
@endsection

@section('content')

  @php
  $total=0;
  @endphp
<p>{{$name}}様</p>
<iframe srcdoc="<p>住所：{{$address}}</p>"></iframe>
</br>
</br>
<p>以下の購入を確定しました</p>
</br>
<table>
  <tr><th>商品名</th><th>数量</th></tr>
  @foreach ($product as $data)
    <tr><td>{{$data->product->name}}</td>
      <td>：{{$data->count}}点</td>
    @php
    $total += ($data->count*$data->product->price);
    @endphp
    </tr>
  @endforeach
</table>
<p>合計：{{$total}}円</p>
</br>
</br>
<a href="/shop/exit?sort=id">ここから商品一覧へ</a>

@endsection

@section('footer')
TEST SHOP BOARD
@endsection
