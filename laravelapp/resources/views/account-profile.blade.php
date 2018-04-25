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
      <div>{{$msg}}</div>
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
              <a href="/test/profile" class="list-group-item list-group-item-action active"><i class="material-icons">person</i>プロフィール</a>
              <a href="/test/order" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i> 注文履歴</a>
              <a href="/test/address" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i>住所変更</a>
              <a href="/test/wishlist" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i> お気に入りリスト<span class="badge badge-secondary badge-pill float-right mt-1">{{$wish}}</span></a>
              <a href="/test/password" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> パスワード変更</a>
              <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> ログアウト</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="title"><span>登録内容変更</span></div>
          <form action="/test/profile" method="post">
            {{ csrf_field() }}
            <input type="hidden" name='id' value="{{$customer->id}}">
            <input type="hidden" name='login' value="{{$customer->login}}">
            <input type="hidden" name='address' value="{{$customer->address}}">
            <input type="hidden" name='zip' value="{{$customer->zip}}">
            <input type="hidden" name='password' value="{{$customer->password}}">
            <input type="hidden" name='password_confirmation' value="{{$customer->password_confirmation}}">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="InputName">お名前</label>
                <input type="text" class="form-control" id="InputName" name="name" value="{{$customer->name}}" placeholder="Enter Name">
                @foreach ($errors->get('name') as $error)
                  <li style="font-size : 12px;">{{ $error }}</li>
                @endforeach
              </div>
              <div class="form-group col-md-6">
                <label for="InputEmail">メールアドレス</label>
                <input type="email" class="form-control" id="InputEmail" name="email" value="{{$customer->email}}" placeholder="Enter Email">
                @foreach ($errors->get('email') as $error)
                  <li style="font-size : 12px;">{{ $error }}</li>
                @endforeach
              </div>
              <!--<div class="form-group col-md-6" name="birthday">
                <label class="d-block">生年月日</label>
                <select class="custom-select col-3" data-width="70px">
                  <option value="0">Year</option>
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                </select>
                <select class="custom-select col-3" data-width="80px">
                  <option value="0">Month</option>
                  <option value="Jan">Jan</option>
                  <option value="Feb">Feb</option>
                  <option value="Mar">Mar</option>
                  <option value="Apr">Apr</option>
                  <option value="May">May</option>
                  <option value="Jun">Jun</option>
                  <option value="Jul">Jul</option>
                  <option value="Aug">Aug</option>
                  <option value="Sept">Sept</option>
                  <option value="Oct">Oct</option>
                  <option value="Nov">Nov</option>
                  <option value="Dec">Dec</option>
                </select>
                <select class="custom-select col-3" data-width="60px">
                  <option value="0">Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div class="form-group col-md-6" name="gender">
                <label class="d-block">性別</label>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender1" name="gender" class="custom-control-input" checked="checked">
                  <label class="custom-control-label" for="gender1">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender2" name="gender" class="custom-control-input">
                  <label class="custom-control-label" for="gender2">Female</label>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="profilePicture">プロフィール画像</label>
                <input type="file" id="profilePicture" class="d-block">
              </div>-->
            </div>
            <hr class="mt-0 mb-3">
            <button type="submit" class="btn btn-theme my-1"><i class="material-icons">save</i> 変更</button>
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
