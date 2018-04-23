@extends('layouts.testshopapp')
@section('title','Shop List')

@include('components.topheader',['nowpage'=>'Shop List'])

        <div class="breadcrumb-container">
          <div class="container-fluid limited">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop list</li>
              </ol>
            </nav>
          </div>
        </div>

@section('content')
        @include('components.filer-widget')

        <div class="col-lg-9 col-md-8">
          <div class="title"><span>{{$pagename}}</span></div>

          <!-- Sorting Bar -->
          <div class="row mb-3 border pt-2 px-3 rounded no-gutters">
            @include('components.sort')
            <div class="mb-2 col-12 col-sm-4 text-center text-sm-right">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-outline-theme btn-sm" href="/test/grid" role="button"><i class="material-icons">apps</i></a>
                <a class="btn btn-theme btn-sm" href="/test/list" role="button"><i class="material-icons">list</i></a>
              </div>
            </div>
          </div>
          <!-- /Sorting Bar -->

          <div class="row">

            @foreach ($products as $product)
              <div class="col-12">
              <div class="media hover-style media-list">
                <a href="detail.html">
                  <div data-cover="/img/product/pro{{$product->id}}.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="200px" data-lg-height="200px" data-xl-height="200px"></div>
                </a>
                <div class="media-body">
                  <a href="detail.html" class="h5">{{$product->name}}</a>

                  <div class="rating">
                    @include('components.star',['star'=>$star])
                  </div>

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
                  <p>{{$product->ex}}Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eos esse rerum iusto, ut maxime!</p>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Action">
                      <button class="btn btn-theme">ADD TO CART</button>
                      <button class="btn btn-outline-theme show-quickview d-none d-md-inline-block" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="material-icons">zoom_in</i></button>
                      <button class="btn btn-outline-theme" data-toggle="tooltip" data-placement="top" title="Add to Compare"><i class="material-icons">compare_arrows</i></button>
                      <button class="btn btn-outline-theme" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="material-icons">favorite_border</i></button>
                    </div>
                </div>
              </div>
              </div>
            @endforeach
            <div class="col-12">
              <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                  {{$products->links()}}
                  <!--<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&laquo;</a></li>
                  <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&lsaquo;</a></li>
                  <li class="page-item active"><span class="page-link">1</span></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&rsaquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>-->
                </ul>
              </nav>
            </div>
          </div>
        </div>
@endsection
@section('end')
  @include('components.modal-menu')
  @include('components.cart')
  @include('components.modal-login')
  @include('components.modal-quikview')
  @include('components.footer')
  @include('components.pro-footercss')
@endsection
