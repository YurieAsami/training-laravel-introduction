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
    <title>Single Product - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/photoswipe.min.css">
    <link rel="stylesheet" href="/css/photoswipe-default-skin/default-skin.min.css">

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Single Product'])

    <div class="container-fluid limited">
      <div class="row">
        <div class="col-12 d-block d-md-none">
          <div class="title"><span>{{$product->name}}</span></div>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6">
          <div class="swiper-container border rounded mb-2" id="detail-slider">
            <div class="swiper-wrapper">
              @for ($i=2; $i<=5; $i++)
              <div class="swiper-slide"><img src="/img/product/pro{{$product->id}}-large-{{$i}}.jpg" class="w-100" data-width="1025" data-height="1400" alt="Product"></div>
              @endfor
            </div>
            <a href="#zoom" class="btn-zoom"><i class="material-icons md-2">zoom_in</i></a>
          </div>
          <div class="swiper-container detail-gallery mb-2" id="detail-gallery">
            <div class="swiper-wrapper">
              @for ($i=1; $i<=5; $i++)
              <div class="swiper-slide"><a href="#"><img src="/img/product/pro{{$product->id}}-{{$i}}.jpg" alt="Product" class="img-thumbnail"></a></div>
              @endfor
            </div>
            <div class="swiper-button-prev" id="detail-gallery-prev"><i class="material-icons md-3">keyboard_arrow_left</i></div>
            <div class="swiper-button-next" id="detail-gallery-next"><i class="material-icons md-3">keyboard_arrow_right</i></div>
          </div>
          <!--<div class="title d-none d-md-block"><span>Share to</span></div>
          <ul class="list-inline share-link d-none d-md-block">
            <li class="list-inline-item"><button type="button" class="btn btn-sm btn-secondary rounded-circle py-2"><svg fill="#fff" viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg></button></li>
            <li class="list-inline-item"><button type="button" class="btn btn-sm btn-secondary rounded-circle py-2"><svg fill="#fff" viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></button></li>
            <li class="list-inline-item"><button type="button" class="btn btn-sm btn-secondary rounded-circle py-2"><svg fill="#fff" viewBox="0 0 24 24"><path d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" /></svg></button></li>
            <li class="list-inline-item"><button type="button" class="btn btn-sm btn-secondary rounded-circle py-2"><svg fill="#fff" viewBox="0 0 24 24"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg></button></li>
          </ul>-->
        </div>
        <div class="col-xl-8 col-lg-7 col-md-6">
          <table class="table table-detail">
            <tbody>
              <tr class="d-none d-md-table-row">
                <td class="border-top-0" colspan="2"><h5>{{$product->name}}</h5></td>
              </tr>
              <tr>
                <td>価格</td>
                <td>
                  <ul class="list-inline mb-0">
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
                </td>
              </tr>
              <tr>
                <td>在庫</td>
                <td>
                  <span class="badge badge-success">In Stock</span>
                </td>
              </tr>
              <form action="/test/cart" method="post">
                {{ csrf_field() }}
              <tr>
                <td class="align-middle">数量</td>
                <td>
                  <div class="input-group input-group-sm input-group-qty">
                    <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="material-icons">keyboard_arrow_down</i></button></div>
                    <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" data-min="1" data-max="10" name="quantity">
                    <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="material-icons">keyboard_arrow_up</i></button></div>
                  </div>
                </td>
              </tr>
              <!--<tr class="d-none d-md-table-row">
                <td class="align-middle">Checkbox</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="detailCheck">
                    <label class="custom-control-label" for="detailCheck">Checkbox 1</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="detailCheck2">
                    <label class="custom-control-label" for="detailCheck2">Checkbox 2</label>
                  </div>
                </td>
              </tr>
              <tr class="d-none d-md-table-row">
                <td class="align-middle">Radio Option</td>
                <td>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="option1" name="quickview-option" class="custom-control-input">
                    <label class="custom-control-label" for="option1">Yes</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="option2" name="quickview-option" class="custom-control-input">
                    <label class="custom-control-label" for="option2">No</label>
                  </div>
                </td>
              </tr>-->
              <tr>
                <td></td>
                <td>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-theme" name="cart" value={{$product->id}}>カートに入れる</button></form>
                    <form action="/test/wishlist" method="post">
                      {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-theme" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" name="wish" value={{$product->id}}><i class="material-icons">favorite_border</i></button></form>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link text-secondary active" id="desc-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">説明</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">詳細</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link text-secondary" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">レビュー count($reviews)}}</a>
            </li>-->
          </ul>
          <div class="tab-content">
            <div class="tab-pane border border-top-0 p-3 show active" id="home" role="tabpanel" aria-labelledby="desc-tab">
              <p>豆</p>
              <p>おいしい</p>
            </div>
            <div class="tab-pane border border-top-0 p-3" id="detail" role="tabpanel" aria-labelledby="detail-tab">
              <table class="table table-bordered mb-0 table-sm">
                <tbody>
                  <tr>
                    <td class="bg-light w-25">産地</td>
                    <td>国産</td>
                  </tr>
                  <tr>
                    <td class="bg-light w-25">内容量</td>
                    <td>２００ｇ</td>
                  </tr>
                  <tr>
                    <td class="bg-light w-25">製造元</td>
                    <td>豆工場</td>
                  </tr>
                </tbody>
              </table>
            </div>
          <!--  <div class="tab-pane border border-top-0 p-3" id="review" role="tabpanel" aria-labelledby="review-tab">
  php
    $reviews[]=array('customer_name'=>'John Thor','msg'=>'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi');
    $reviews[]=array('customer_name'=>'Michael Lelep','msg'=>'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi')
  endphp
              foreach ($reviews as $review)
              <div class="media mb-3">
                <div class="mr-2">
                  <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                  <div class="rating">  staはレビュー一個一個の評価
                    php
                      $sta=0;
                      $total=0;
                      for($i = 0 ; $i <= $star ; $i++){
                        if($i % 2 == 0 AND $i != 0){
                          echo '<i class="material-icons">star</i>';
                          $sta++;
                        }else{
                          $total++;
                        }
                      }
                      while ($sta < 5){
                        if($total % 2 == 0){
                          echo '<i class="material-icons">star_border</i>';
                          $sta++;
                        }else{
                          echo '<i class="material-icons">star_half</i>';
                            $sta++;
                            $total++;
                        }
                      }
                    endphp
                  </div>
                </div>
                <div class="media-body">
                  <div class="font-weight-bold">{$review['customer_name']}}</div>
                  {$review['msg']}}
                </div>
              </div>
              endforeach

              <hr>
              <h5><a data-toggle="collapse" href="#formReview" role="button" aria-expanded="false" aria-controls="formReview">Add your review</a></h5>
              <form class="mt-3 collapse" id="formReview">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="InputName" class="mb-0 font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Enter Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputEmail" class="mb-0 font-weight-bold">Email Address</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="d-block mb-0 font-weight-bold">Rating</label>
                  <div class="rating-review rating"></div>
                </div>
                <div class="form-group">
                  <label class="mb-0 font-weight-bold" for="InputReview">Your Review</label>
                  <textarea class="form-control" id="InputReview" rows="4" placeholder="Your Review Here"></textarea>
                </div>
                <button type="submit" class="btn btn-theme btn-sm">Submit Review</button>
              </form>-->
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-12"><div class="title"><span>他の商品はこちら</span></div></div>
        <div class="col-12">
          <div class="swiper-nav">
            <div class="swiper-nav-prev" id="newInPrev"><i class="material-icons">keyboard_arrow_left</i></div>
            <div class="swiper-nav-next" id="newInNext"><i class="material-icons">keyboard_arrow_right</i></div>
          </div>
          <div class="swiper-container swiper-container-have-hover" id="newIn-slider">
            <div class="swiper-wrapper">
              @foreach ($other_products as $product)
                <form action="/test/cart" method="post">
                  {{ csrf_field() }}
              <div class="card card-product swiper-slide">
                <a href="/test/detail?id={{$product->id}}"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
                <div class="card-body">
                  <div class="card-title"><a href="/test/detail?id={{$product->id}}" title="{{$product->name}}">{{$product->name}}</a></div>
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
                      <button type="submit" class="btn btn-theme" name="cart" value={{$product->id}}>ADD TO CART</button></form>
                      <form action="/test/wish" method="post">
                        {{ csrf_field() }}
                      <button type="submit" class="btn btn-theme" name="wish" value={{$product->id}}><i class="material-icons">favorite_border</i></button></form>
                    </div>
                  </div>
                  <div class="small-action d-block d-md-none">
                    <div class="btn-group dropup">
                      <span role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#10247;</span>
                      <div class="dropdown-menu dropdown-menu-right fadeIn">
                        <a class="dropdown-item" href="#"><i class="material-icons">add_shopping_cart</i> BUY</a>
                        <a class="dropdown-item" href="#"><i class="material-icons">favorite_border</i> Wishlist</a>
                        <a class="dropdown-item" href="#"><i class="material-icons">compare_arrows</i> Compare</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>        </div>
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
    <!-- Photoswipe container-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Required js -->
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/typeahead.bundle.min.js"></script>

    <!-- Plugins js -->
    <script src="/js/swiper.min.js"></script>
    <script src="/js/photoswipe.min.js"></script>
    <script src="/js/photoswipe-ui-default.min.js"></script>
    <script src="/js/jquery.raty.min.js"></script>

    <!-- Template JS -->
    <script src="/js/script.min.js"></script>

  </body>
</html>
