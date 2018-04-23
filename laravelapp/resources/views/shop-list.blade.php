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

@include('components.topheader',['nowpage'=>'Shop List'])

        <div class="breadcrumb-container">
          <div class="container-fluid limited">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/test/index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop List</li>
              </ol>
            </nav>
          </div>
        </div>

    <div class="container-fluid limited">
      <div class="row">

  @include('components.filer-widget')

        <div class="col-lg-9 col-md-8">
          <div class="title"><span>T-Shirts</span></div>

          <!-- Sorting Bar -->
          <div class="row mb-3 border pt-2 px-3 rounded no-gutters">
            <div class="mb-2 col-12 col-sm-8 text-center text-sm-left">
              <span>Sort by</span>
              <select name="sortby" class="custom-select ml-2 w-auto custom-select-sm">
                <option value="popularity">Popularity</option>
                <option value="best-selling">Best Selling</option>
                <option value="low">Low Price &rarr; High Price</option>
                <option value="hight">High Price &rarr; High Price</option>
              </select>
            </div>
            <div class="mb-2 col-12 col-sm-4 text-center text-sm-right">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-outline-theme btn-sm" href="/test/grid" role="button"><i class="material-icons">apps</i></a>
                <a class="btn btn-theme btn-sm" href="/test/list" role="button"><i class="material-icons">list</i></a>
              </div>
            </div>
          </div>
          <!-- /Sorting Bar -->

          <div class="row">
            <div class="col-12">
              @foreach ($products as $product)
                <div class="media hover-style media-list">
                  <a href="/test/detail">
                    <div data-cover="/img/product/pro{{$product->id}}.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="200px" data-lg-height="200px" data-xl-height="200px"></div>
                  </a>
                  <div class="media-body">
                    <a href="/test/detail" class="h5">{{$product->name}}</a>

                    <div class="rating">
                      @php
                        $sta=0;
                        $total=0;
                      for($i = 0 ; $i <= $star ; $i++){
                        if($i % 2 == 0 AND $i != 0){
                          echo "<i class='material-icons'>star</i>";
                            $sta++;
                        }else{
                          $total++;
                        }
                      }
                       while ($sta < 5){
                        if($total % 2 == 0){
                        echo "<i class='material-icons'>star_border</i>";
                          $sta++;
                        }else{
                        echo "<i class='material-icons'>star_half</i>";
                            $sta++;
                            $total++;
                        }
                      }
                      @endphp
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
            @endforeach
            </div>
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
    <script src="/js/nouislider.min.js"></script>

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
