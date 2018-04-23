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
    <title>{{$page}} - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>$page])

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
    @else
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
              <a href="/test/address" class="list-group-item list-group-item-action active"><i class="material-icons">location_on</i> Addresses</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i> Wishlist<span class="badge badge-secondary badge-pill float-right mt-1">3</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> Change Password</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> Logout</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="title"><span>Billing Address</span><button class="btn btn-sm btn-outline-theme float-right"><i class="material-icons">mode_edit</i> Edit</button></div>
          <table class="table mb-3 table-sm">
            <tbody>
              <tr>
                <td class="border-top-0">
                  <strong>Address</strong>
                  <div>{{$customer->address}}Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Country</strong>
                  <div>{{$customer->country}}</div>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Region / State</strong>
                  <div>{{$customer->region}}</div>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>City</strong>
                  <div>{{$customer->city}}</div>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>ZIP Code</strong>
                  <div>{{$customer->zip}}</div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="title"><span>Shipping Address</span></div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="shippingAddr" checked="checked">
            <label class="custom-control-label" for="shippingAddr">
              <span role="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Same as Billing Address</span>
            </label>
          </div>
          <form class="mt-2 collapse" id="collapseExample">
            <div class="form-group mb-1 mb-md-3">
              <label for="inputAddress" class="mb-0 mb-md-2">Address *</label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="form-row">
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputCountry" class="mb-0 mb-md-2">Country *</label>
                <input type="text" class="form-control" id="inputCountry">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputZip" class="mb-0 mb-md-2">Zip/Postal Code *</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputCity" class="mb-0 mb-md-2">City *</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputRegion" class="mb-0 mb-md-2">Region *</label>
                <input type="text" class="form-control" id="inputRegion">
              </div>
            </div>
            <button type="submit" class="btn btn-theme my-1"><i class="material-icons">save</i> Save</button>
          </form>
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
