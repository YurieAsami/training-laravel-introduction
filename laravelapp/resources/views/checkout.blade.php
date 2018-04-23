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
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">1</span> ADDRESS</span></div>
          <div class="form-group mb-1 mb-md-3">
            <label for="inputName" class="mb-0 mb-md-2">Name *</label>
            <input type="text" class="form-control" id="inputName">
          </div>
          <div class="form-group mb-1 mb-md-3">
            <label for="inputAddress" class="mb-0 mb-md-2">Address Line 1 *</label>
            <input type="text" class="form-control" id="inputAddress">
          </div>
          <div class="form-group mb-1 mb-md-3">
            <label for="inputAddress2" class="mb-0 mb-md-2">Address Line 2 (optional)</label>
            <input type="text" class="form-control" id="inputAddress2">
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
            <div class="form-group mb-1 mb-md-3 col-md-6">
              <label for="inputPhone" class="mb-0 mb-md-2">Phone Number *</label>
              <input type="text" class="form-control" id="inputPhone">
            </div>
            <div class="form-group mb-1 mb-md-3 col-md-6">
              <label for="inputEmail" class="mb-0 mb-md-2">Email Address *</label>
              <input type="email" class="form-control" id="inputEmail">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">2</span> SHIPPING</span></div>
          <div class="mb-4">
            <div class="custom-control custom-radio">
              <input type="radio" id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked">
              <label class="custom-control-label" for="shippingOption1">Standard Delivery</label>
              <span class="float-right font-weight-bold">FREE</span>
            </div>
            <div class="ml-4 mb-2 small">(3-7 business days)</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="shippingOption2" name="shipping-option" class="custom-control-input">
              <label class="custom-control-label" for="shippingOption2">Express Delivery</label>
              <span class="float-right font-weight-bold">$10.00</span>
            </div>
            <div class="ml-4 mb-2 small">(2-4 business days)</div>
            <div class="custom-control custom-radio">
              <input type="radio" id="shippingOption3" name="shipping-option" class="custom-control-input">
              <label class="custom-control-label" for="shippingOption3">Next Business day</label>
              <span class="float-right font-weight-bold">$20.00</span>
            </div>
          </div>
          <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">3</span> PAYMENT METHOD</span></div>
          <p class="mb-1">BILLING ADDRESS :</p>
          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="billingAddress" checked="checked">
            <label class="custom-control-label" for="billingAddress">Same as shipping address</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="paymentMethod1" name="payment-method" class="custom-control-input" checked="checked">
            <label class="custom-control-label" for="paymentMethod1">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="paymentMethod2" name="payment-method" class="custom-control-input">
            <label class="custom-control-label" for="paymentMethod2">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="paymentMethod3" name="payment-method" class="custom-control-input">
            <label class="custom-control-label" for="paymentMethod3">Net banking</label>
          </div>
          <div class="bg-light p-3 rounded">
            <div class="form-group mb-1">
              <label class="mb-0" for="inputCard">Card Number</label>
              <input type="text" class="form-control form-control-sm" id="inputCard">
            </div>
            <div class="form-group mb-1">
              <label class="mb-0" for="inputFullname">Full name</label>
              <input type="text" class="form-control form-control-sm" id="inputFullname">
            </div>
            <div class="form-row">
              <div class="form-group mb-1 col-md-6">
                <label class="mb-0" for="inputExpiry">Expiry date</label>
                <input type="text" class="form-control form-control-sm" id="inputExpiry">
              </div>
              <div class="form-group mb-1 col-md-6">
                <label class="mb-0" for="inputCvv">CVV code</label>
                <input type="password" class="form-control form-control-sm" id="inputCvv">
              </div>
            </div>
          </div>
            <div class="mt-1">
              <img src="/img/payment-1.png" alt="payment">
              <img src="/img/payment-2.png" alt="payment">
              <img src="/img/payment-3.png" alt="payment">
              <img src="/img/payment-4.png" alt="payment">
              <img src="/img/payment-5.png" alt="payment">
            </div>
        </div>
        <div class="col-lg-4">
          <div class="row">

            <div class="col-md-6 col-lg-12">
              <div class="title"><span>ORDER SUMMARY</span></div>
              @php
              $comtotal=0;
              $total=0;
              @endphp
              <div class="rounded p-2 bg-light">
                @foreach ($products as $product)
                  @php
                    $compare=0;
                    $subtotal=0;
                    $price=$product->price;
                  @endphp
                  <div class="media mb-2 border-bottom">
                    <div class="media-body">
                      <a href="/test/detail">{{$product->name}}</a>
                    <div class="small text-muted">Size: {{$product->size}} <span class="mx-2">|</span> Color: {{$product->color}}</div>
                      @if(isset($product->sale))
                        @php
                          $compare=($product->price)*($product->sale)/100;
                          $prices=($product->price)-$compare;
                          $subtotal=$prices*1;
                          $subtotals=$price*1;
                          $comtotal+=$compare;
                          $total+=$subtotals;
                        @endphp
                      <div class="small text-muted">Price: ${{$prices}}
                      @else
                        @php
                          $subtotal=$price*1;
                          $total+=$subtotal;
                        @endphp
                        <div class="small text-muted">Price: ${{$price}}
                      @endif
                      <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: {{$subtotal}}</div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>

            <div class="col-md-6 col-lg-12">
              <div class="d-flex mt-3">
                <div>Bag Total</div>
                <div class="ml-auto font-weight-bold">${{$total}}</div>
              </div>
              <div class="d-flex">
                <div>Bag Discount</div>
                <div class="ml-auto font-weight-bold">${{$comtotal}}</div>
              </div>
              <hr class="my-1">
              <div class="d-flex">
                <div>Coupon Discount</div>
                <div class="ml-auto font-weight-bold">-</div>
              </div>
              <div class="d-flex">
                <div>Shipping Cost</div>
                <div class="ml-auto font-weight-bold">FREE</div>
              </div>
              <hr>
              <div class="d-flex">
                <div class="font-weight-bold h6">Order Total</div>
                @php
                  $totals=0;
                  $totals=$total-$comtotal;
                @endphp
                <div class="ml-auto text-theme h5">{{$totals}}</div>
              </div>
              <hr>
              <div class="text-center"><button class="btn btn-theme">SUBMIT MY ORDER</button></div>
            </div>
          </div>
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
