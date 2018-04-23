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
    <title>My Wishlist - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader')

    @isset($msg)
      <p>{{$msg}}</p>
    @endisset
    @if ($customer==NULL)
      <div  align="center">
      <a href="/test/login" method="post"><h2><button type="button" class="btn btn-outline-theme" >
        ログインページはこちら</button></h2></a>
      <a href="/test/register" method="post"><h2><button type="button" class="btn btn-outline-theme">
        新規登録はこちら</button></h2></a>
      </div>
    <div class="container-fluid limited mb-5">
    <div class="row">
    @elseif(isset($customer->name))
    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
          <div class="card user-card">
            <div class="card-body p-2 mb-3 mb-md-0 mb-xl-3">
              <div class="media">
                <img class="rounded-circle" src="/img/user.png" alt="John Thor">
                <div class="media-body">
                  <h5 class="user-name">{{$customer->name}}</h5>
                  <small class="card-text text-muted">Joined Dec 31, 2017{{$customer->join}}</small>
                  <div class="card-text small text-muted">Points: {{$customer->point}}</div>
                </div>
              </div>
            </div>
            <div class="list-group list-group-flush">
              <a href="/test/profile" class="list-group-item list-group-item-action"><i class="material-icons">person</i> Profile</a>
              <a href="/test/order" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i> Orders</a>
              <a href="/test/address" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i> Addresses</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action active"><i class="material-icons">favorite</i> Wishlist<span class="badge badge-light badge-pill float-right mt-1">{{$wish}}</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> Change Password</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> Logout</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="title"><span>My Wishlist</span></div>
          @isset($msg)
          <p>{{$msg}}</p>
          @endisset
          <div class="row mb-3 border pt-2 px-3 rounded no-gutters">
            <div class="mb-2 col-12 col-sm-6 text-center text-sm-left">
              <span>Date</span>
              <select name="sortbydate" class="custom-select ml-2 w-auto custom-select-sm">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
              </select>
            </div>
            <div class="mb-2 col-12 col-sm-6 text-center text-sm-right">
              <span>Availability</span>
              <select name="availability" class="custom-select ml-2 w-auto custom-select-sm">
                <option value="all">All</option>
                <option value="in-stock">In Stock</option>
                <option value="out-stock">Out of Stock</option>
              </select>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-cart table-wishlist">
              <thead>
                <tr>
                  <th scope="col" class="w-50">Item</th>
                  <th scope="col" class="d-none d-sm-table-cell">Added</th>
                  <th scope="col" class="d-none d-sm-table-cell">Price</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                @php
                  $price=($product->product->price)*(100-($product->product->sale))/100;
                  if($stock=0){
                    $stock='Out of stock';
                  }else{
                    $stock='In stock';
                  }
                @endphp
                <tr>
                  <td>
                    <div class="media">
                      <a href="/test/detail" class="mr-3 d-none d-md-block"><img src="/img/product/pro{{$product->product->id}}-small.jpg" class="img-fluid" alt="product"></a>
                      <div class="media-body">
                        <a href="/test/detail" class="h6">{{$product->product->name}}</a>
                        <div class="mb-1">
                          <span class="d-inline d-sm-none small">Price: <span class="text-theme">{{$price}}</span></span>
                          <div class="small mt-2 d-none d-sm-block">Availability:</div>
                          <span class="badge badge-success custom-badge arrowed-right">{{$stock}}</span>
                        </div>
                        <div class="small d-block d-sm-none">Added: March 18, 2018</div>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell">March 18, 2018</td>
                  <td class="d-none d-sm-table-cell">
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="text-theme">{{$price}}</span></li>
                      <li class="list-inline-item"><del class="text-muted small">{{$product->product->price}}</del></li>
                    </ul>
                  </td>
                  <td class="text-center">
                    <div class="btn-group" role="group" aria-label="Compare action">
                      <button type="button" class="btn btn-sm btn-theme">BUY NOW</button>
                      <button type="button" class="btn btn-sm btn-outline-theme"><i class="material-icons">close</i></button>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="text-center">
            <button class="btn btn-outline-theme"><i class="material-icons">shopping_cart</i> Add All to Cart</button>
          </div>
        </div>
      @endif
      </div>
    </div>

    @include('components.modal-menu')
    @include('components.cart',['carts'=>$carts,'cart'=>$cart])
    @include('components.modal-login')
    @include('components.footer')

    <a href="#top" class="back-top text-center" id="back-top">
      <i class="material-icons">expand_less</i>
    </a>
    <!-- Required js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/typeahead.bundle.min.js"></script>

    <!-- Plugins js -->

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
