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
    <title>Home - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->
    <link rel="stylesheet" href="/css/swiper.min.css">

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>

  <body>
    @isset($msg)
    {{$msg}}　
    @endisset
    @isset($name)
    ようこそ　{{$name}}さん
    @endisset
@include('components.topheader')
@include('components.home-slider')

    <div class="container-fluid limited mt-5">

@include('components.service-block')
<!--include('components.categories')
    include('components.flash-sale',['products'=>$products])-->

      <!-- Top Brands -->
    <!--  <div class="row mb-5">
        <div class="col-12"><div class="title text-center"><span>Top Brands You'll Love</span></div></div>
        <div class="col-12">
          <div class="swiper-nav">
            <div class="swiper-nav-prev" id="brand-slider-prev"><i class="material-icons">keyboard_arrow_left</i></div>
            <div class="swiper-nav-next" id="brand-slider-next"><i class="material-icons">keyboard_arrow_right</i></div>
          </div>
          <div class="swiper-container swiper-container-have-hover" id="brand-slider">
            <div class="swiper-wrapper">
              php
                $brands=array('1','2','3','4','5','1','2','3');
              endphp
              foreach ($brands as $brand)
              <div class="card card-brand hover-style swiper-slide">
                <div class="card-body">
                  <a href="/test/grid"><img class="card-img-top" src="/img/brand/brand{$brand}}.svg" alt="Example Brand"></a>
                </div>
              </div>
              endforeach
            </div>
          </div>
        </div>
      </div>-->
      <!-- /Top Brands -->

      <!-- New In -->
      <div class="row mb-4">
        <div class="col-12"><div class="title text-center"><span><i class="material-icons align-text-bottom text-theme">new_releases</i> NEW IN</span></div></div>
        <div class="col-12">
          <div class="swiper-nav">
            <div class="swiper-nav-prev" id="newInPrev"><i class="material-icons">keyboard_arrow_left</i></div>
            <div class="swiper-nav-next" id="newInNext"><i class="material-icons">keyboard_arrow_right</i></div>
          </div>
          <div class="swiper-container swiper-container-have-hover" id="newIn-slider">
            <div class="swiper-wrapper">
              @foreach ($products as $product)
              <div class="card card-product swiper-slide">
                <a href="/test/detail"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                  <div class="card-title"><a href="/test/detail" title={{$product->name}}>{{$product->name}}</a></div>
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
                  <div class="action">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Action">
                      <!--<button class="btn btn-outline-theme show-quickview"><i class="material-icons">zoom_in</i></button>-->
                      <form action="/test/cart" method="post">
                        {{ csrf_field() }}
                      <button class="btn btn-theme" name="cart" vakue={{$product->id}}>ADD TO CART</button></form>
                      <form action="/test/wishlist" method="post">
                        {{ csrf_field() }}
                      <button class="btn btn-outline-theme" name="wish" value={{$product->id}}><i class="material-icons">favorite_border</i></button></form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>        </div>
      </div>
      <!-- /New In -->

      <div class="row mb-3 compact">

        <!-- Recent Reviews -->
      <!--  <div class="col-md-5 col-lg-3">
          <div class="title"><span>Recent Reviews</span></div>
          php
            $reviews[]=array('msg'=>'Good model, good material quality','product_name'=>'Fendi Bugs Sweater','customer_name'=>'John Mblo');
            $reviews[]=array('msg'=>'Nice Shirt, I Love it','product_name'=>'MCQ Alexander McQueen Swallow','customer_name'=>'John Thor');
            $reviews[]=array('msg'=>'Good product, comfortable to wear','product_name'=>'FBurberry The Plymouth Duffle Coat','customer_name'=>'John Nes');
            $reviews[]=array('msg'=>'Great sweatshirt, Recommended !','product_name'=>'MCQ Alexander McQueen Mini Swallow','customer_name'=>'May John');
          endphp
          foreach ($reviews as $review)
          <div class="media media-comment">
            <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_161085b5e1e%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_161085b5e1e%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
            <div class="media-body">
              <div>{$review['msg']}}</div>
              <div class="small text-right">in <a href="/test/detail">{$review['product_name']}}</a></div>
              <div class="small text-right">from <a href="#">{$review['customer_name']}}</a></div>
            </div>
          </div>
          endforeach

        </div>-->
        <!-- /Recent Reviews -->

        <!-- Explore Store -->
      <!--  <div class="col-md-7 col-lg-9">
          <div class="title"><span>Explore Store</span></div>
          <div class="row compact">
            php
            $mencates=['0'=>['Clothing'=>'Polos & Tees','Casual Shirts','Formal Shirts','More >>'],'1'=>['Footwear'=>'Sports Shoes','Sneakers','Formal Shoes','More >>'],'2'=>'Accessories','3'=>'Bags'];
            endphp
            <div class="col-sm-6 col-md-6 col-lg-4 mb-3">
              <div class="card">
                <img class="card-img-top" src="/img/product/men1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title mb-0">MEN</h5>
                </div>
                <div class="list-group list-group-flush list-group-collapse list-group-sm" id="list-group-men" data-children=".sub-men">
                  foreach ($mencates as $mencate)
                    if(is_array($mencate))
                    <div class="list-group-collapse sub-men">
                    <a class="list-group-item list-group-item-action" href="#sub-men{key($mencate)}}" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men{key($mencate)}}">{key($mencate)}}</a>
                    <div class="collapse" id="sub-men{key($mencate)}}" data-parent="#list-group-men">
                      <div class="list-group">
                       foreach ($mencate as $value)
                        <a href="/test/grid" class="list-group-item list-group-item-action">{$value}}</a>
                       endforeach
                      </div>
                    </div>
                    </div>
                    else
                  <a href="/test/grid" class="list-group-item list-group-item-action">{$mencate}}</a>
                    endif
                  endforeach
                </div>
                <div class="card-body text-center p-1">
                  <a href="#" class="btn btn-block btn-theme btn-sm">SHOP ALL</a>
                </div>
              </div>
            </div>
            php
            $womcates=['0'=>['Clothing'=>'Tops, Tees & Shirts','Dresses & Jumpsuits','Leggings & Jeggings','More >>'],'1'=>['Footwear'=>'Handbags','Sling Bags','Wallets','More >>'],'2'=>'Accessories','3'=>'Jewellery'];
            endphp
            <div class="col-sm-6 col-md-6 col-lg-4 mb-3">
              <div class="card">
                <img class="card-img-top" src="/img/product/women1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title mb-0">WOMEN</h5>
                </div>
                <div class="list-group list-group-flush list-group-collapse list-group-sm" id="list-group-women" data-children=".sub-women">
                  foreach ($womcates as $womcate)
                   if(is_array($womcate))
                    <div class="list-group-collapse sub-women">
                    <a class="list-group-item list-group-item-action" href="#sub-women{key($womcate)}}" data-toggle="collapse" aria-expanded="false" aria-controls="sub-women{key($womcate)}}">{key($womcate)}}</a>
                    <div class="collapse" id="sub-women{key($womcate)}}" data-parent="#list-group-women">
                      <div class="list-group">
                       foreach ($womcate as $value)
                        <a href="/test/grid" class="list-group-item list-group-item-action">{$value}}</a>
                       endforeach
                      </div>
                    </div>
                    </div>
                    else
                  <a href="/test/grid" class="list-group-item list-group-item-action">{$womcate}}</a>
                    endif
                  endforeach
                </div>
                <div class="card-body text-center p-1">
                  <a href="#" class="btn btn-block btn-theme btn-sm">SHOP ALL</a>
                </div>
              </div>
            </div>
            php
            $kidscates=array('Boys Clothing','Girls Clothing','Accessories','Toys')
          endphp
            <div class="col-sm-6 col-md-6 col-lg-4 mb-3 d-none d-lg-block">
              <div class="card">
                <img class="card-img-top" src="/img/product/kids1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title mb-0">KIDS</h5>
                </div>
                <div class="list-group list-group-flush list-group-sm">
                  foreach ($kidscates as $kidscate)
                  <a href="/test/grid" class="list-group-item list-group-item-action">{$kidscate}}</a>
                  endforeach
                </div>
                <div class="card-body text-center p-1">
                  <a href="#" class="btn btn-block btn-theme btn-sm">SHOP ALL</a>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <!-- ./Explore Store -->

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
    <script src="/js/jquery.countdown.min.js"></script>

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
