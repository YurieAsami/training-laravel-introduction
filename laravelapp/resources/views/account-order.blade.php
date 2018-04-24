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
                  <div class="card-text small text-muted">Points: {{$customer->point}}</div>
                </div>
              </div>
            </div>
            <div class="list-group list-group-flush">
              <a href="/test/profile" class="list-group-item list-group-item-action"><i class="material-icons">person</i> プロフィール</a>
              <a href="/test/order" class="list-group-item list-group-item-action active"><i class="material-icons">shopping_cart</i>注文履歴</a>
              <a href="/test/address" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i>住所変更</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i>お気に入りリスト<span class="badge badge-secondary badge-pill float-right mt-1">3</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i>パスワード変更</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i>ログアウト</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="title"><span>My Orders</span></div>
          <div class="row mb-3 border pt-2 px-3 rounded no-gutters">
            <div class="mb-2 col-12 col-sm-6 text-center text-sm-left">
              <span>Date</span>
              <select name="sortbydate" class="custom-select ml-2 w-auto custom-select-sm">
                <option value="oldest">Oldest</option>
                <option value="newest">Newest</option>
              </select>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">購入番号</th>
                  <th scope="col">購入日時</th>
                  <th scope="col">商品</th>
                  <th scope="col">個数</th>
                  <th scope="col">合計</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($purcus as $pur)
                @foreach ($purchases as $purchase)
                  @if ($pur->id==$purchase->purchase_id)
                    @php
                    $total=0;
                    $total=$purchase->count*$purchase->product->price;
                    @endphp
                <tr>
                  <th scope="row"><a>{{$pur->id}}</a></th>
                  <td>{{$pur->created_at}}</td>
                  <td>{{$purchase->product->name}}</td>
                  <td>{{$purchase->count}}</td>
                  <td>{{$total}}円</td>
                </tr>
                @endif
                @endforeach
              @endforeach
              </tbody>
            </table>
          </div>
            <ul class="pagination">

            </ul>
          </nav>
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
