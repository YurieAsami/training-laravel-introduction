<DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
   <title>@yield('title')</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <link rel="icon" type="image/png" href="favicon.png">
   <link rel="apple-touch-icon" href="touch-icon-iphone.png">
   <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
   <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
   <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

   <title>@yield('title')</title>
   <!-- Required css -->
   <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <!-- Plugins css -->
   <link href="/css/swiper.min.css" rel="stylesheet">
   <link href="/css/nouislider.min.css" rel="stylesheet">
   <!-- Template css -->
   <link href="/css/style.min.css" rel="stylesheet">
 </head>

<body>

<div>
@yield('header')
</div>

<div class="content">
@yield('content')
</div>

<div class="model fade modal-cart">
@section('cart')
  <!-- Modal Cart -->
  <div class="modal fade modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">You have 4 items in your bag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="media">
            <a href="detail.html" class="mr-2"><img class="img-fluid rounded" src="img/product/polo1-small.jpg" width="70" alt="Generic placeholder image"></a>
            <div class="media-body">
              <div><a href="detail.html" class="text-dark">Burberry The Plymouth Duffle Coat</a></div>
              <span class="text-secondary"><span class="mr-3">x1</span>$50.00</span>
              <button class="close text-danger"><i class="material-icons">close</i></button>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-center border-top-0">
          <div class="btn-group" role="group" aria-label="Cart Action">
            <a href="cart.html" class="btn btn-outline-theme" role="button">VIEW CART</a>
            <a href="checkout.html" class="btn btn-theme" role="button">CHECKOUT</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
</div>
<div>
@section('login')
  <!-- Modal Login -->
  <div class="modal fade modal-login" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Enter Your Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            <div class="text-right">
              <a href="#" class="text-secondary"><small>Forgot Password ?</small></a>
            </div>
          </div>
          <div class="custom-control custom-checkbox mt-1">
            <input type="checkbox" class="custom-control-input" id="checkRemember">
            <label class="custom-control-label" for="checkRemember">Remember me</label>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <div class="btn-group" role="group" aria-label="Login Action">
            <a href="register.html" class="btn btn-outline-theme" role="button">I want to Sign Up</a>
            <button type="submit" class="btn btn-theme">SIGN IN</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
</div>
<div class="modal fade modal-quickview">
@section('quikcontent')
  <div class="modal fade modal-quickview" id="quickviewModal" tabindex="-1" role="dialog" aria-labelledby="quickviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="quickviewModalLabel"><a href="detail.html" class="text-dark">U.S. Polo Assn. Green Solid Slim Fit</a></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body px-0">
          <div class="container-fluid">
            <div class="row compact">
              <div class="col col-sm-6">
                <div class="swiper-container" id="quickview-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="img/product/polo1.jpg" alt="image" class="w-100"></div>
                    <div class="swiper-slide"><img src="img/product/polo2.jpg" alt="image" class="w-100"></div>
                    <div class="swiper-slide"><img src="img/product/polo3.jpg" alt="image" class="w-100"></div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev d-none d-sm-flex" id="quickview-prev"><i class="material-icons md-3">keyboard_arrow_left</i></div>
                  <div class="swiper-button-next d-none d-sm-flex" id="quickview-next"><i class="material-icons md-3">keyboard_arrow_right</i></div>
                </div>
              </div>
              <div class="col col-sm-6">
                <div class="list-detail">
                  <div>Price</div>
                  <div>
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="small text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-secondary">-10%</span></li>
                    </ul>
                  </div>
                </div>
                <div class="list-detail">
                  <div>Quantity</div>
                  <div>
                    <div class="input-group input-group-sm input-group-qty">
                      <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="material-icons">keyboard_arrow_down</i></button></div>
                      <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" data-min="1" data-max="10">
                      <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="material-icons">keyboard_arrow_up</i></button></div>
                    </div>
                  </div>
                </div>
                <div class="list-detail">
                  <div>Size</div>
                  <div>
                    <select name="size" class="custom-select custom-select-sm w-50">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                    </select>
                  </div>
                </div>
                <div class="list-detail">
                  <div>Checkbox</div>
                  <div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="quickviewCheck">
                      <label class="custom-control-label" for="quickviewCheck">Check this</label>
                    </div>
                  </div>
                </div>
                <div class="list-detail">
                  <div>Radio Options</div>
                  <div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="quickviewOption1" name="quickview-option" class="custom-control-input">
                      <label class="custom-control-label" for="quickviewOption1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="quickviewOption2" name="quickview-option" class="custom-control-input">
                      <label class="custom-control-label" for="quickviewOption2">No</label>
                    </div>
                  </div>
                </div>
                <div class="list-detail">
                  <div class="btn-group btn-group-sm w-100" role="group" aria-label="quickview action">
                    <button class="btn btn-theme w-75"><i class="material-icons">add_circle</i> Add to Cart</button>
                    <button class="btn btn-outline-theme w-25"><i class="material-icons">favorite</i></button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
</div>

@section('footer')
<div class="footer">
  <div class="container-fluid limited">
    <div class="row">
      <div class="col-6 col-lg-3">
        <h6>Shop</h6>
        <div class="list-group list-group-flush">
          <a href="contact.html" class="list-group-item list-group-item-action">Help / Support</a>
          <a href="about.html" class="list-group-item list-group-item-action">About Us</a>
          <a href="faq.html" class="list-group-item list-group-item-action">FAQ</a>
          <a href="#" class="list-group-item list-group-item-action">Coupons</a>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <h6>Our Policies</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action">Terms &amp; Conditions</a>
          <a href="#" class="list-group-item list-group-item-action">Privacy Policy</a>
          <a href="#" class="list-group-item list-group-item-action">Payment Method</a>
          <a href="#" class="list-group-item list-group-item-action">Shipping Method</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <h6>Download The App</h6>
        <div>
          <a href="#">
            <div class="media">
              <img src="/img/apple.svg" alt="Apple Logo" height="30">
              <div class="media-body">
                <small>Download on the</small>
                <div>App Store</div>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div class="media">
              <img src="/img/google-play.svg" alt="Google Play Logo" height="30">
              <div class="media-body">
                <small>Get it on</small>
                <div>Google Play</div>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div class="media">
              <img src="/img/windows.svg" alt="Windows Logo" height="30">
              <div class="media-body">
                <small>Get it from</small>
                <div>Microsoft Store</div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <h6>Stay Connected</h6>
        <p>Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
        <div class="input-group">
          <input class="form-control" placeholder="Your Email Address" aria-label="Your Email Address" type="text">
          <div class="input-group-append">
            <button class="btn btn-theme" type="button">Subscribe</button>
          </div>
        </div>
        <ul class="list-unstyled social-link">
          <li><a href="#"><svg viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg></a></li>
          <li><a href="#"><svg viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></a></li>
          <li><a href="#"><svg viewBox="0 0 24 24"><path d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" /></svg></a></li>
          <li><a href="#"><svg viewBox="0 0 24 24"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg></a></li>
          <li><a href="#"><svg viewBox="0 0 24 24"><path d="M6.18,15.64A2.18,2.18 0 0,1 8.36,17.82C8.36,19 7.38,20 6.18,20C5,20 4,19 4,17.82A2.18,2.18 0 0,1 6.18,15.64M4,4.44A15.56,15.56 0 0,1 19.56,20H16.73A12.73,12.73 0 0,0 4,7.27V4.44M4,10.1A9.9,9.9 0 0,1 13.9,20H11.07A7.07,7.07 0 0,0 4,12.93V10.1Z" /></svg></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Copyright -->
<div class="copyright">
  Copyright © 2018 Mimity All right reserved
</div>
<!-- /Copyright -->

<a href="#top" class="back-top text-center" id="back-top">
  <i class="material-icons">expand_less</i>
</a>
<!-- Required js -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/typeahead.bundle.min.js"></script>

<!-- Plugins js -->
<script src="js/swiper.min.js"></script>
<script src="js/nouislider.min.js"></script>

<!-- Template JS -->
<script src="js/script.min.js"></script>

@endsection
</body>
</html>
