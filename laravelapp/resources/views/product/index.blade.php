@extends('layouts.shopapp')
<style>
   .pagination { font-size:10pt; }
   .pagination li { display:inline-block }

</style>


@section('title', 'SHOP HOME')

@section('menubar')

   商品一覧
@endsection

@section('content')
<p>{{$nam}}様</p>

   <table>
   <tr>
     <th><a href="/shop/list?sort=id">id</a></th>
     <th><a href="/shop/list?sort=name">name</a></th>
     <th><a href="/shop/list?sort=price">price</a></th>
   </tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td><a href="/shop/pro?id={{$item->id}}">{{$item->name}}</a></td>
           <td>{{$item->price}}</td>
       </tr>
   @endforeach
 </table>
{{$items->appends(['sort'=>$sort])->links()}}
@endsection

@section('footer')
<p><a href="/shop/logout">ログアウト</a></p>
<p><a href="/shop/edit">会員情報変更</a></p>
TEST SHOP BOARD
@endsection
