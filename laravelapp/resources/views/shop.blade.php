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
    <title>Shop List - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/nouislider.min.css">

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Shop Grid','wish'=>$wish,'cart'=>$cart])

    <div class="container-fluid">
      <div class="row">

  <!--include('components.filer-widget')-->

        <div class="col-lg-9 col-md-8">
          <div class="title"><span>{{$pagename}}</span></div>

          <!-- Sorting Bar
          <div class="row mb-3 border pt-2 px-3 rounded no-gutters">
            <div class="mb-2 col-12 col-sm-8 text-center text-sm-left">
              <span>Sort by</span>
              <select name="sortby" class="custom-select ml-2 w-auto custom-select-sm" onchange="dropsort()">
                <option value="/test/grid?sort=priceup">価格が低い順</option>
                <option value="/test/grid?sort=price">価格が高い順</option>
              </select>
            </div>
            <div class="mb-2 col-12 col-sm-4 text-center text-sm-right">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-theme btn-sm" href="/test/grid" role="button"><i class="material-icons">apps</i></a>
                <a class="btn btn-outline-theme btn-sm" href="/test/list" role="button"><i class="material-icons">list</i></a>
              </div>
            </div>
          </div>-->
          <!-- /Sorting Bar -->

          <div class="row">

  @foreach ($products as $product)
            <div class="col-6 col-sm-4 col-md-6 col-lg-4 col-xl-3">
              <div class="card card-product">
                <a href="/test/detail?id={{$product->id}}"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                  <div class="card-title"><a href="/test/detail?id={{$product->id}}" title={{$product->name}}>{{$product->name}}</a></div>
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
                  <!--<div class="attribute attribute-right rating">
                    php
                      $sta=0;
                      $total=0;
                      for($i = 0 ; $i <= $ ; $i++){
                        if($i % 2 == 0 AND $i != 0){
                          echo '<i class="material-icons">star</i>';
                          $sta++;
                        }else{
                          $total++;
                        }
                      }
                      while ($sta < 5){
                        if($total % 2 == 0){
                          echo '<i class="material-icons">star_border</i>';
                          $sta++;
                        }else{
                          echo '<i class="material-icons">star_half</i>';
                            $sta++;
                            $total++;
                        }
                      }
                    endphp
                  </div>-->
                  <div class="action">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Action">

                      <form action="/test/cart" method="post">{{ csrf_field() }}
                        <button class="btn btn-theme" type="submit" name="cart" value="{{$product->id}}">ADD TO CART</button></form>
                      <form action="/test/wishlist" method="post">{{ csrf_field() }}
                        <button class="btn btn-outline-theme" type="submit" name="wish" value="{{$product->id}}"><i class="material-icons">favorite_border</i></button></form>
                    </div>
                  </div>
                  <div class="small-action d-block d-md-none">
                    <div class="btn-group dropup">
                      <span role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#10247;</span>
                      <div class="dropdown-menu dropdown-menu-right fadeIn">
                        <a class="dropdown-item" href="#"><i class="material-icons">add_shopping_cart</i> BUY</a>
                        <a class="dropdown-item" href="#"><i class="material-icons">favorite_border</i> Wishlist</a>
                        <a class="dropdown-item" href="#"><i class="material-icons">compare_arrows</i> Compare</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  @endforeach
            <div class="col-12">
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

@include('components.modal-menu')
@include('components.cart',['carts'=>$carts,'cart'=>$cart])
@include('components.modal-login')
<!--include('components.modal-quikview')-->
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
    <script src="/js/nouislider.min.js"></script>

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>