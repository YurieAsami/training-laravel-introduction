
<div class="middle-header" id="middle-header">
  <div class="container-fluid limited position-relative">

    <div class="input-search-wrapper invisible">
      <form action="#" method="post">
        <input type="text" class="form-control" id="input-search" placeholder="Search" aria-label="Search">
        <span class="rounded-circle bg-dark text-white toggle-search"><i class="small material-icons">close</i></span>
        <input type="submit" hidden="hidden">
      </form>
    </div>

    <div class="row">

      <div class="col-4 d-flex d-md-none align-items-center">
        <a href="#" class="text-dark" data-toggle="modal" data-target="#menuModal"><i class="material-icons md-2">menu</i></a>
      </div>
      <div class="col-4 col-md-auto d-flex align-items-center justify-content-center justify-content-md-start">
        <a href="index.html" class="logo">
          <img src="/img/logo.svg" alt="Mimity" class="d-none d-md-block">
          <img src="/img/logo-text.svg" alt="Mimity" class="d-block d-md-none">
        </a>
      </div>
      <div class="col d-none d-md-block position-static">
        <nav class="navbar nav main-nav justify-content-center justify-content-md-start position-static p-0">
          <a class="nav-link" href="index.html">HOME</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP</a>
            <div class="dropdown-menu animate">
              <a class="dropdown-item" href="shop.html">商品表示</a>
              <a class="dropdown-item" href="shop-list.html">リスト表示</a>
              <a class="dropdown-item" href="detail.html">商品詳細</a>
              <a class="dropdown-item" href="cart.html">カート</a>
              <a class="dropdown-item" href="checkout.html">Checkout</a>

            </div>
          </div>
          <div class="nav-item dropdown position-static">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEGA MENU</a>
            <div class="dropdown-menu dropdown-menu-mega animate">
              <form> <!-- added <form> tags to prevent dropdown closed when clicked inside dropdown-menu -->
                <div class="row">
                  <div class="col-4 col-lg-3">
                    <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Top Categories</h6>
                    <div class="list-group list-group-no-border list-group-sm">
                      <a href="shop.html" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Hooded T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3">
                    <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">カテゴリー</h6>
                    <div class="list-group list-group-no-border list-group-sm" id="list-mega" data-children=".list-submega">
                      <a href="shop.html" class="list-group-item list-group-item-action">Dresses</a>
                      <div class="list-group-collapse list-submega">
                        <a href="#list-submega-1" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false" aria-controls="list-submega-1">
                          Tops
                        </a>
                        <div class="collapse" id="list-submega-1" data-parent="#list-mega">
                          <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                          </div>
                        </div>
                      </div>
                      <a href="shop.html" class="list-group-item list-group-item-action">Bottoms</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Jackets / Coats</a>
                      <div class="list-group-collapse list-submega">
                        <a href="#list-submega-2" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false" aria-controls="list-submega-2">
                          Sweaters
                        </a>
                        <div class="collapse" id="list-submega-2" data-parent="#list-mega">
                          <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                            <a class="list-group-item list-group-item-action" href="shop.html">lorem ipsum</a>
                          </div>
                        </div>
                      </div>
                      <a href="shop.html" class="list-group-item list-group-item-action">Gym Wear</a>
                      <a href="shop.html" class="list-group-item list-group-item-action">Others</a>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3">
                    <div class="card hover-style2 border-white text-white mb-2">
                      <img class="card-img" src="/img/product/type-polo.jpg" alt="Card image">
                      <div class="card-img-overlay text-center p-2 p-md-3">
                        <h4 class="card-title mb-0">春の豆祭り</h4>
                        <p class="card-text mb-xl-1">期間限定セール</p>
                        <a href="shop.html" class="btn btn-sm btn-theme" role="button">SHOP NOW</a>
                      </div>
                    </div>
                    <div class="card hover-style2 border-white text-white">
                      <img class="card-img" src="/img/product/type-hooded.jpg" alt="Card image">
                      <div class="card-img-overlay text-center p-2 p-md-3">
                        <h4 class="card-title">新商品</h4>
                        <a href="shop.html" class="btn btn-sm btn-light" role="button">SHOP NOW</a>
                      </div>
                    </div>
                    <div class="card hover-style2 border-white text-white mb-2">
                      <img class="card-img" src="/img/product/type-polo.jpg" alt="Card image">
                      <div class="card-img-overlay text-center p-2 p-md-3">
                        <h4 class="card-title mb-0">在庫処分セール</h4>
                        <a href="shop.html" class="btn btn-sm btn-theme" role="button">SHOP NOW</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col-lg-3 d-none d-lg-block">
                    <a href="shop.html"><img src="/img/product/mega-menu.jpg" class="img-fluid rounded hover-style2" alt="Product"></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
            <div class="dropdown-menu animate">
              <a class="dropdown-item" href="blog.html">Blog Grid</a>
              <a class="dropdown-item" href="blog-list.html">Blog List</a>
              <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
            <div class="dropdown-menu animate">
              <a class="dropdown-item" href="about.html">About Us</a>
              <a class="dropdown-item" href="compare.html">比較</a>
              <a class="dropdown-item" href="contact.html">お問い合わせ</a>
              <a class="dropdown-item" href="cart-empty.html">Empty Shopping Cart</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="login.html">ログイン</a>
              <a class="dropdown-item" href="register.html">会員登録</a>
              <div class="dropdown-submenu">
                <a href="#" class="dropdown-item d-flex justify-content-between">My Account <i class="material-icons md-1 mt-1">chevron_right</i></a>
                <div class="dropdown-menu animate">
                  <a href="account-profile.html" class="dropdown-item">会員情報</a>
                  <a href="account-order.html" class="dropdown-item">注文履歴</a>
                  <a href="account-address.html" class="dropdown-item">ご登録連絡先</a>
                  <a href="account-wishlist.html" class="dropdown-item">ほしいものリスト</a>
                  <a href="account-password.html" class="dropdown-item">パスワード変更</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-4 col-md-auto d-flex align-items-center justify-content-end pl-0">
        <nav class="nav nav-counter">
          <a href="#" class="nav-link toggle-search"><img src="/img/search.svg" alt="search"></a>
          <a href="account-wishlist.html" class="nav-link counter d-none d-lg-block"><span>3</span><img src="/img/wishlist.svg" alt="wishlist"></a>
          <a href="#" class="nav-link counter" data-toggle="modal" data-target="#cartModal"><span>4</span><img src="/img/bag.svg" alt="bag"></a>
        </nav>
      </div>

    </div>
  </div>
</div>
<div class="breadcrumb-container">
  <div class="container-fluid limited">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop List</li>
      </ol>
    </nav>
  </div>
</div>
