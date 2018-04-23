<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <title>Shopping Cart - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->
    <link rel="stylesheet" href="/css/swiper.min.css">

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Shopping Cart'])


    <div class="container-fluid limited">
      <div class="row">
        <div class="col text-center">
          @isset($msg)
            <p>{{$msg}}</p>
          @endisset
          @if (is_NULL($customer))
            <div  align="center">
            <a href="/test/login" method="post"><h2><button type="button" class="btn btn-outline-theme" >
              ログインページはこちら</button></h2></a>
            <a href="/test/register" method="post"><h2><button type="button" class="btn btn-outline-theme">
              新規登録はこちら</button></h2></a>
            </div>
          @endif
          <div><i class="material-icons md-5">shopping_cart</i></div>
          <h1 class="font-weight-normal">Your shopping cart is currently empty</h1>
          <p>Add products to it. Check out our wide range of products!</p>
          <a href="/test/grid" role="button" class="btn btn-outline-theme">SHOP NOW</a>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-12"><div class="title"><span>Recently viewed items</span></div></div>
        <div class="col-12">
          <div class="swiper-nav">
            <div class="swiper-nav-prev" id="newInPrev"><i class="material-icons">keyboard_arrow_left</i></div>
            <div class="swiper-nav-next" id="newInNext"><i class="material-icons">keyboard_arrow_right</i></div>
          </div>
          <div class="swiper-container swiper-container-have-hover" id="newIn-slider">
            <div class="swiper-wrapper">
            @foreach ($other_products as $product)
              <div class="card card-product swiper-slide">
                <a href="/test/detail"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                  <div class="card-title"><a href="/test/detail" title="Burberry The Plymouth Duffle Coat">{{$product->name}}</a></div>
                  <ul class="card-text list-inline pr-2">
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
                  <div class="action">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Action">
                      <button class="btn btn-outline-theme show-quickview"><i class="material-icons">zoom_in</i></button>
                      <form action="/test/cart" method="post">
                          {{ csrf_field() }}
                      <button class="btn btn-theme" name="cart" value="{{$product->id}}">ADD TO CART</button></form>
                      <form action="/test/wishlist" method="post">
                          {{ csrf_field() }}
                      <button class="btn btn-outline-theme" name="wish" value="{{$product->id}}"><i class="material-icons">favorite_border</i></button></form>
                    </div>
                  </div>
                  <div class="small-action d-block d-md-none">
                    <div class="btn-group dropup">
                      <span role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#10247;</span>
                      <div class="dropdown-menu dropdown-menu-right fadeIn">
                        <a class="dropdown-item" href="/test/cart"><i class="material-icons">add_shopping_cart</i> BUY</a>
                        <a class="dropdown-item" href="/test/wishlist"><i class="material-icons">favorite_border</i> Wishlist</a>
                        <a class="dropdown-item" href="/test/compare"><i class="material-icons">compare_arrows</i> Compare</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>        </div>
      </div>
    </div>

    @include('components.modal-menu')
    @include('components.cart',['carts'=>$carts,'cart'=>$cart])
    @include('components.modal-login')
    @include('components.modal-quikview')
    @include('components.footer')

    <a href="#top" class="back-top text-center" id="back-top">
      <i class="material-icons">expand_less</i>
    </a>
    <!-- Required js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/typeahead.bundle.min.js"></script>

    <!-- Plugins js -->
    <script src="/js/swiper.min.js"></script>

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
