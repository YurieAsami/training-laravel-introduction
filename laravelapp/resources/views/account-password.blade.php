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

@include('components.topheader')
@isset($msg)
  {{$msg}}
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
                </div>
              </div>
            </div>
            <div class="list-group list-group-flush">
              <a href="/test/profile" class="list-group-item list-group-item-action"><i class="material-icons">person</i>プロフィール</a>
              <a href="/test/order" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i>注文履歴</a>
              <a href="/test/address" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i>住所変更</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i>お気に入りリスト<span class="badge badge-secondary badge-pill float-right mt-1">{{$wish}}</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action active"><i class="material-icons">vpn_key</i>パスワード変更</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i>ログアウト</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="title"><span>パスワード変更</span></div>
          @isset($msg)
            {{$msg}}
          @endisset
          <form action="/test/password" method="post">
            {{ csrf_field() }}
            <input type="hidden" name='id' value="{{$customer->id}}">
            <input type="hidden" name='name' value="{{$customer->name}}">
            <input type="hidden" name='login' value="{{$customer->login}}">
            <input type="hidden" name='address' value="{{$customer->address}}">
            <input type="hidden" name='zip' value="{{$customer->zip}}">
            <input type="hidden" name='email' value="{{$customer->email}}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="InputOldPassword">旧パスワード</label>
                <input type="Password" class="form-control" id="InputOldPassword" name="oldpassword">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="InputNewPassword">新パスワード</label>
                <input type="Password" class="form-control" id="InputNewPassword" name="password">
                @foreach ($errors->get('password') as $error)
                  <li style="font-size : 12px;">{{ $error }}</li>
                @endforeach
              </div>
              <div class="form-group col-md-6">
                <label for="InputNewPassword2">もう一度新パスワードを入力してください</label>
                <input type="Password" class="form-control" id="InputNewPassword2" name="password_confirmation">
              </div>
            </div>
            <button type="submit" class="btn btn-theme my-1"><i class="material-icons">save</i>変更</button>
          </form>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>


    @include('components.modal-menu')
    @include('components.cart',['carts'=>$carts,'cart'=>$cart])
    @include('components.modal-login')
    @include('components.footer')

    <!-- Required js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/typeahead.bundle.min.js"></script>

    <!-- Plugins js -->

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
