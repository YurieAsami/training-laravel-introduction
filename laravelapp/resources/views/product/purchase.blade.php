@extends('layouts.shopapp')

@section('title', '注文確定')

@section('menubar')
   注文確定画面
@endsection

@section('content')

  @if (isset($products))
  <table>
  <tr><th>商品番号</th><th>商品名</th>
  <th>価格</th><th>個数</th><th>小計</th></tr>
    @php
    $total=0;
    @endphp
    @foreach ($products as $product)
      <tr>
        <td>{{$product[0]}}</td>
        <td>{{$product[1]}}</td>
        <td>:{{$product[2]}}点</td>
        <td>({{$product[3]}}円)</td>
        <td>
        @php print $product[2]*$product[3]."円" ;
        $total += ($product[2]*$product[3]);
        @endphp
        </td>
      </tr>
    @endforeach
  </br>
  <tr><th>合計：</th><th>{{$total}}円</th></tr>
  </table>
  </br>

  <p><a href="/shop/purchase">購入を確定する</a></p>
  </br>
  </br>
  <a href="/shop/cart">カートに戻る</a>

@elseif (isset($product))
    @php
    $total=0;
    @endphp
  <p>{{$name}}様</p>
  <iframe srcdoc="<p>住所：{{$address}}</p>">
</iframe>
  <br>
  <br>
  <p>以下の購入を確定しました</p>
</br>
  <table>
  <tr><th>商品名</th><th>数量</th></tr>
    @foreach ($product as $data)
      <tr>
          <td>{{$data->product->name}}</td>
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
  @else
  <p>カートに商品がありません。</p>
  @endif
@endsection

@section('footer')
  @if(!isset($product))
<p><a href="/shop/list?sort=id">商品一覧へ</a></p>
  @endif
TEST SHOP BOARD
@endsection
