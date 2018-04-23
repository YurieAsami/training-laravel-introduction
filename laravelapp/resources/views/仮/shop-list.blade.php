@extends('layouts.testapp')

@section('title','商品一覧')

@section('header')
  @include('components.topheader')
  @include('components.middleheader')
@endsection

@section('content')
  <div class="container-fluid limited">
  <div class="row">
  @include('components.left')

<div class="col-lg-9 col-md-8">
<div class="title"><span>T-Shirts</span></div>
@include('components.sort')
<div class="row compact">
  <div class="col-12">
@foreach ($products as $product)
    <div class="media hover-style media-list">
      <a href="/test/detail?id={{$product->id}}">
        <div data-cover="/img/product/polo1.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="200px" data-lg-height="200px" data-xl-height="200px" style="background-image: url('/img/product/pro{{$product->id}}.jpg'); height: 200px;"></div>
      </a>
      <div class="media-body">
        <a href="/test/detail?id={{$product->id}}" class="h5">{{$product->name}}</a>
    @include('components.star')
        <ul class="card-text list-inline">
          @if(isset($product->sale))
            @php
              $prices=($product->price)*($product->sale)/100;
            @endphp
          <li class="list-inline-item"><span class="price">{{$prices}}円</span></li>
          <li class="list-inline-item"><del class="text-muted small">{{$product->price}}円</del></li>
          <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-theme">{{$product->sale}}% OFF</span></li>
          @else
          <li class="list-inline-item"><span class="price">{{$product->price}}円</span></li>
        @endif
        </ul>
        <p>{{$product->ex}}</p>

        <div class="btn-group btn-group-sm" role="group" aria-label="Action">
          <button class="btn btn-theme">ADD TO CART</button>
          <button class="btn btn-outline-theme show-quickview d-none d-md-inline-block" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="material-icons">zoom_in</i></button>
          <button class="btn btn-outline-theme" data-toggle="tooltip" data-placement="top" title="Add to Compare"><i class="material-icons">compare_arrows</i></button>
          <button class="btn btn-outline-theme" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="material-icons">favorite_border</i></button>
        </div>
      </div>
    </div>
@endforeach
  </div>
            <div class="col-12" align="center">
              <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
             {{$products->links()}}
           </ul>
         </nav>
            </div>
          </div>
        </div>
        </div>
      </div>
@endsection

@include('components.modal_menu')

@section('cart')
@endsection

@section('login')
@endsection

@section('quikcontent')
   <!-- Modal Quikview -->
@endsection

@section('footer')
@endsection
  </body>
</html>
