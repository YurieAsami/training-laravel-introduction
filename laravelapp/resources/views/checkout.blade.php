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
        <div class="col-md-6 col-lg-12">
          <div class="title"><span>お届け先</span></div>
          <div>
            <label for="inputName" class="mb-0 mb-md-2">Name: </label>
            {{$customer->name}}
          </div>
          <div>
            <label for="inputAddress" class="mb-0 mb-md-2">Address: </label>
            {{$customer->zip}}
            {{$customer->address}}
          </div>
          <div>
            <label for="inputEmail" class="mb-0 mb-md-2">Email Address: </label>
            {{$customer->email}}
          </div>
          </div>
            <div class="col-md-6 col-lg-12">
              <div class="title"><span>購入確認</span></div>
              @php
              $comtotal=0;
              $total=0;
              @endphp
              <div class="rounded p-2 bg-light">
                @foreach ($products as $product)
                  @php
                    $compare=0;
                    $subtotal=0;
                    $subtotals=0;
                  @endphp
                  <div class="media mb-2 border-bottom">
                    <div class="media-body">
                      <a href="/test/detail">{{$product->product->name}}</a>
                      @if(isset($product->product->sale))
                        @php
                          $compare=($product->product->price)*($product->product->sale);
                          $prices=($product->product->price)-$compare;
                          $subtotals=$prices*($product->count);
                          $subtotal=($product->product->price)*($product->count);
                          $comtotal+=$compare;
                          $total+=$subtotal;
                        @endphp
                      <div class="small text-muted">Price: ${{$prices}}
                      @else
                        @php
                          $subtotal=($product->product->price)*($product->count);
                          $total+=$subtotal;
                          $subtotals=+$subtotal;
                        @endphp
                        <div class="small text-muted">金額: {{$product->product->price}}円
                      @endif
                      <span class="mx-2">|</span> 数量: {{$product->count}}<span class="mx-2">|</span> 小計: {{$subtotals}}</div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>
            @php
            $totals=0;
            $totals=$total-$comtotal;
              if ($totals<3000) {
                $totals=$totals+600;
                $cost=600;
              }else{
                $cost=0;
              }
            @endphp
            <hr>
            <div class="col-md-6 col-lg-12">
              <div class="d-flex mt-3">
                <div>合計金額</div>
                <div class="ml-auto font-weight-bold">${{$total}}</div>
              </div>
              <div class="d-flex">
                <div>割引</div>
                <div class="ml-auto font-weight-bold">${{$comtotal}}</div>
              </div>
              <div class="d-flex">
                <div>送料</div>
                <div class="ml-auto font-weight-bold">{{$cost}}
                </div>
              </div>
              <hr>
              <div class="d-flex">
                <div class="font-weight-bold h6">総計</div>
                <div class="ml-auto text-theme h5">{{$totals}}</div>
              </div>
              <hr>
              <form action="/test/purchase" method="post">
                {{ csrf_field() }}
              <div class="text-center"><button type="submit" class="btn btn-theme" name="total" value={{$totals}}>購入を確定する</button></div></form>
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
