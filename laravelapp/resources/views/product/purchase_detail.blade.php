@extends('layouts.shopapp')
<style>
   .pagination { font-size:14pt; }
   .pagination li { display:inline-block }
</style>
@section('title', 'Purchase history')

@section('menubar')
   注文履歴
@endsection

@section('content')
<p>{{$name}}様</p>
  <li><a href="/shop/fav">お気に入り</a></li>
  <li><a href="/shop/cart">カート</a></li>

</br>
<div align="center">
  <table border=”2″ width="500">
    <tr>
    <th>商品名</a></th>
    <th>個数</a></th>
    <th>金額</th>
    <th>購入日時</th>
    </tr>
  @foreach ($items as $item)
    @foreach($itemm as $it)
      @if(($it->id)==($item->purchase_id))
        <tr>
        <td style="font-size : 20px">{{$item->product->name}}</td>
        <td style="font-size : 20px">{{$item->count}}</td>
        @php
        $total=($item->count)*($item->product->price);
        @endphp
        <td style="font-size : 20px">{{$total}}円</td>
        <td>{{$it->created_at}}</td>
        </tr>
      @endif
    @endforeach
  @endforeach
</div>
</table>
{{$itemm->links()}}
</br>
<p><a href="/shop/list?sort=id">商品一覧へ</a></p>
@endsection

@section('footer')
<p><a href="/shop/edit">会員情報変更</a></p>
<p><a href="/shop/logout">ログアウト</a></p>
TEST SHOP BOARD
@endsection
