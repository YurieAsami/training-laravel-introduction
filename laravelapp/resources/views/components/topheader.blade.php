<!-- Top Header -->
<div class="top-header">
  <div class="container-fluid limited">
    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-between">

          <nav class="nav ml-auto">
            <!--<a class="nav-link d-none d-sm-block" href="/test/faq"><i class="material-icons">help_outline</i> Help</a>-->
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><i class="material-icons">person_outline</i> Sign In</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Top Header -->
<!-- Middle Header -->
<div class="middle-header" id="middle-header">
  <div class="container-fluid limited position-relative">

    <div class="input-search-wrapper invisible">
      <form action="/test/find" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" id="input-search" placeholder="Search" aria-label="Search" name="find">
        <span class="rounded-circle bg-dark text-white toggle-search"><i class="small material-icons">close</i></span>
        <input type="submit" hidden="hidden">
      </form>
    </div>

    <div class="row">

      <div class="col-4 d-flex d-md-none align-items-center">
        <a href="" class="text-dark" data-toggle="modal" data-target="#menuModal"><i class="material-icons md-2">menu</i></a>
      </div>
      <div class="col-4 col-md-auto d-flex align-items-center justify-content-center justify-content-md-start">
        <h3>豆販売　あさみ</h3>
      </div>
      <div class="col d-none d-md-block position-static">
        <nav class="navbar nav main-nav justify-content-center justify-content-md-start position-static p-0">
          <a class="nav-link" href="/test/index">ホーム</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">お取り扱い商品</a>
            <div class="dropdown-menu animate">
              <a class="dropdown-item" href="/test/grid">商品一覧</a>
              <a class="dropdown-item" href="/test/cart">ショッピングカート</a>
              <a class="dropdown-item" href="/test/checkout">注文</a>
              <a class="dropdown-item" href="/test/order">購入履歴</a>
            </div>
          </div>
          <!-- <div class="nav-item dropdown position-static">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEGA MENU</a>
            <div class="dropdown-menu dropdown-menu-mega animate">
              <form> <!-- added <form> tags to prevent dropdown closed when clicked inside dropdown-menu
                { csrf_field() }}
              <!--<div class="row">
                  <div class="col-4 col-lg-3">
                    <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Top Categories</h6>
                    <div class="list-group list-group-no-border list-group-sm">
                      <a href="/test/grid" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Hooded T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3">
                    <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Categories</h6>
                    <div class="list-group list-group-no-border list-group-sm" id="list-mega" data-children=".list-submega">
                      <a href="/test/grid" class="list-group-item list-group-item-action">Dresses</a>
                      <div class="list-group-collapse list-submega">
                        <a href="#list-submega-1" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false" aria-controls="list-submega-1">
                          Tops
                        </a>
                        <div class="collapse" id="list-submega-1" data-parent="#list-mega">
                          <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                          </div>
                        </div>
                      </div>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Bottoms</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Jackets / Coats</a>
                      <div class="list-group-collapse list-submega">
                        <a href="#list-submega-2" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false" aria-controls="list-submega-2">
                          Sweaters
                        </a>
                        <div class="collapse" id="list-submega-2" data-parent="#list-mega">
                          <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="/test/grid">lorem ipsum</a>
                          </div>
                        </div>
                      </div>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Gym Wear</a>
                      <a href="/test/grid" class="list-group-item list-group-item-action">Others</a>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3">
                    <div class="card hover-style2 border-white text-white mb-2">
                      <img class="card-img" src="/img/product/type-polo.jpg" alt="Card image">
                      <div class="card-img-overlay text-center p-2 p-md-3">
                        <h4 class="card-title mb-0">Polo T-Shirts</h4>
                        <p class="card-text mb-xl-1">40% OFF</p>
                        <a href="/test/grid" class="btn btn-sm btn-theme" role="button">SHOP NOW</a>
                      </div>
                    </div>
                    <div class="card hover-style2 border-white text-white">
                      <img class="card-img" src="/img/product/type-hooded.jpg" alt="Card image">
                      <div class="card-img-overlay text-center p-2 p-md-3">
                        <h4 class="card-title">New Collection</h4>
                        <a href="/test/grid" class="btn btn-sm btn-light" role="button">SHOP NOW</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3 d-none d-lg-block">
                    <a href="/test/grid"><img src="/img/product/mega-menu.jpg" class="img-fluid rounded hover-style2" alt="Product"></a>
                  </div>

                </div>
              </form>
            </div>
          </div>-->

          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">アカウント</a>
            <div class="dropdown-menu animate">
              <a href="/test/profile" class="dropdown-item">プロフィール</a>
              <a class="dropdown-item" href="/test/cart">ショッピングカート</a>
              <a href="/test/order" class="dropdown-item">注文履歴</a>
              <a href="/test/wishlist" class="dropdown-item">お気に入りリスト</a>
              <a href="/test/address" class="dropdown-item">住所変更</a>
              <a href="/test/password" class="dropdown-item">パスワード変更</a>
              <a class="dropdown-item" href="/test/login">ログイン</a>
              <a href="/test/logout" class="dropdown-item">ログアウト</a>
              <a class="dropdown-item" href="/test/register">会員登録</a>
            </div>
          </div>
          </div>
        </nav>
      <div class="col-4 col-md-auto d-flex align-items-center justify-content-end pl-0">
        <nav class="nav nav-counter">
          <a href="#" class="nav-link toggle-search"><img src="/img/search.svg" alt="search"></a>
          <a href="/test/wishlist" class="nav-link counter d-none d-lg-block"><span>{{$wish}}</span><img src="/img/wishlist.svg" alt="wishlist"></a>
          <a href="/test/cart" class="nav-link counter" data-toggle="modal" data-target="#cartModal"><span>{{$cart}}</span><img src="/img/bag.svg" alt="bag"></a>
        </nav>
      </div>
    </div>
  </div>
</div>
    <!-- /Middle Header -->

    <div class="breadcrumb-container">
      <div class="container-fluid limited">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/test/index">Home</a></li>
            @isset($page)
            <li class="breadcrumb-item active" aria-current="page">{{$page}}</li>
            @endisset
          </ol>
        </nav>
      </div>
    </div>