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
    <title>Checkout - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Checkout'])
    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
          <div class="card user-card">
            <div class="card-body p-2 mb-3 mb-md-0 mb-xl-3">
              <div class="media">
                <img class="rounded-circle" src="/img/user.png" alt="John Thor">
                <div class="media-body">
                  <h5 class="user-name">{{$customer->name}}</h5>
                </div>
              </div>
            </div>
            <div class="list-group list-group-flush">
              <a href="/test/profile" class="list-group-item list-group-item-action active"><i class="material-icons">person</i>プロフィール</a>
              <a href="/test/order" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i> 注文履歴</a>
              <a href="/test/address" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i>住所変更</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i> お気に入りリスト<span class="badge badge-secondary badge-pill float-right mt-1">{{$wish}}</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> パスワード変更</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> ログアウト</a>
            </div>
          </div>
        </div>

        @php
        $total=0;
        @endphp

  <div class="col-lg-9 col-md-8">
      <p>{{$customer->name}}様</p>
      </br>
      </br>
      <p>以下の購入を確定しました</p>
    </hr>
      <table>
        <tr><th>商品名</th><th>数量</th></tr>
        @foreach ($products as $data)
          <tr><td>{{$data->product->name}}</td>
            <td>{{$data->count}}</td>
          </tr>
        @endforeach

      <tr>合計：{{$pur->total}}円</tr>
      </br>
      </br>
      </table>
      </div>
      <div align="center">
      <a href="/test/grid">ここから商品一覧へ</a>
      </div>
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
