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

@include('components.topheader',['nowpage'=>'Shopping Cart'])

    <div class="container-fluid limited">
      <div class="row">
        <div class="col-12">
          @isset($msg)
            {{$msg}}
          @endisset
          <div class="title"><span>You have {{$cart}} items in your bag</span></div>
          <div class="table-responsive">
            <table class="table table-cart">
              <thead>
                <tr>
                  <th scope="col" class="w-50">商品</th>
                  <th scope="col" class="text-center">数量</th>
                  <th scope="col" class="d-none d-sm-table-cell">価格</th>
                  <th scope="col" class="d-none d-sm-table-cell">小計</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $total=0;
                  $comtotal=0;
                @endphp
              @foreach ($carts as $product)
                @php
                  if (isset($product->product->sale)) {
                    $price=($product->product->price)*(100-($product->product->sale))/100;
                  }else{
                    $price=$product->product->price;
                  }
                  if($stock=0){
                    $stock='Out of stock';
                  }else{
                    $stock='In stock';
                  }
                  $subtotal=($product->count)*$price;
                  $total+=$subtotal;
                  $comtotal+=($product->product->price)*$product->product->sale;
                @endphp
                <tr>
                  <form action="/test/cartdrop" method="post">
                    {{ csrf_field() }}
                    <div><input name="id" type="hidden" value="{{$product->product->id}}"></div>
                    <div><input name="name" type="hidden" value="{{$product->product->name}}"></div>
                  <td>
                    <div class="media">
                      <a href="/test/detail?id={{$product->id}}" class="mr-3 d-none d-md-block"><img src="/img/product/pro{{$product->product->id}}.jpg" width="100" height="100" class="img-fluid" alt="product"></a>
                      <div class="media-body">
                        <a href="/test/detail?id={{$product->id}}" class="h6">{{$product->product->name}}</a>
                        <div class="mb-1">
                          <span class="d-inline d-sm-none small">Price: <span class="text-theme">{{$price}}</span></span>
                          <span class="badge badge-success custom-badge arrowed-right">{{$stock}}</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                    {{$product->count}}
                  </td>
                  <!--<td class="text-center">
                    <div class="input-group input-group-sm input-group-qty d-inline-flex mb-2">
                      <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="material-icons">keyboard_arrow_down</i></button></div>
                      <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" data-min="1" data-max="10">
                      <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="material-icons">keyboard_arrow_up</i></button></div>
                    </div>
                    <div class="d-block d-sm-none">
                      <small>小計</small><div class="text-theme">{$subtotal}}</div>
                    </div>
                  </td>-->
                  <td class="d-none d-sm-table-cell">
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="text-theme">{{$price}}</span></li>
                      <li class="list-inline-item"><del class="text-muted small">{{$product->product->price}}</del></li>
                    </ul>
                  </td>
                  <td class="d-none d-sm-table-cell"><span class="text-theme">{{$subtotal}}</span></td>
                  <td>
                  <div><input class="btn btn-outline-theme" type="submit" value="削除"></div></form></td>
                </tr>

              @endforeach
              </tbody>

            </table>
          </div>

        </div>
      </div>
      <div class="row justify-content-between">
      @php
        $totals=0;
        $alltotal=0;
        $totals=$total-$comtotal;
        if ($totals<3000){
          $cost=600;
          $alltotal=$totals+600;
        }else{
          $cost=0;
          $alltotal=$totals;
        }
      @endphp
        <div class="col-12 col-md-6 col-lg-5 col-xl-4">
          <div class="d-flex">
            <div>割引</div>
            <div class="ml-auto font-weight-bold">{{$comtotal}}円</div>
          </div>
          <div class="d-flex">
            <div>合計金額</div>
            <div class="ml-auto font-weight-bold">{{$totals}}円</div>
          </div>
          <hr class="my-1">
          <div class="d-flex">
            <div>送料</div>
            <div class="ml-auto font-weight-bold">{{$cost}}円
            </div>
          </div>
          <hr>
          <div class="d-flex">
            <div>総計</div>
            <div class="ml-auto text-theme h5 mb-0">{{$alltotal}}円</div>
          </div>
          <hr>
        </div>
        <a href="/test/cartalldrop">カートを空にする</a>
        <div class="col-12 text-right">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/test/grid" class="d-none d-sm-inline-block btn btn-outline-theme">買い物を続ける</a>
            <a href="/test/checkout" class="btn btn-theme rounded-xs">購入する</a>
          </div>
        </div>
        <br/>
      </div>
    </div>

    <div class="row my-5">
      <div class="col-12"><div class="title"><span>他の商品はこちら</span></div></div>
      <div class="col-12">
        <div class="swiper-nav">
          <div class="swiper-nav-prev" id="newInPrev"><i class="material-icons">keyboard_arrow_left</i></div>
          <div class="swiper-nav-next" id="newInNext"><i class="material-icons">keyboard_arrow_right</i></div>
        </div>
        <div class="swiper-container swiper-container-have-hover" id="newIn-slider">
          <div class="swiper-wrapper">
            @foreach ($other_products as $product)
              <form action="/test/cart" method="post">
                {{ csrf_field() }}
            <div class="card card-product swiper-slide">
              <a href="/test/detail?id={{$product->id}}"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <div class="card-title"><a href="/test/detail?id={{$product->id}}" title="{{$product->name}}">{{$product->name}}</a></div>
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
                <div class="action">
                  <div class="btn-group btn-group-sm" role="group" aria-label="Action">
                    <!--<button class="btn btn-outline-theme show-quickview"><i class="material-icons">zoom_in</i></button>-->
                    <button type="submit" class="btn btn-theme" name="cart" value={{$product->id}}>ADD TO CART</button></form>
                    <form action="/test/wishlist" method="post">
                      {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-theme" name="wish" value={{$product->id}}><i class="material-icons">favorite_border</i></button></form>
                  </div>
                </div>
                <div class="small-action d-block d-md-none">
                  <div class="btn-group dropup">
                    <span role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#10247;</span>
                    <div class="dropdown-menu dropdown-menu-right fadeIn">
                      <a class="dropdown-item" href="#"><i class="material-icons">add_shopping_cart</i> BUY</a>
                      <a class="dropdown-item" href="#"><i class="material-icons">favorite_border</i> Wishlist</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>        </div>
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
