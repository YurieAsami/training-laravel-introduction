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
    <title>Compare Product - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Compare Product'])

    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col">
          <div class="title"><span>Product Comparison</span></div>
          <div class="table-responsive">
            <table class="table table-bordered table-cart">
              <thead>
                <tr>
                  <td class="bg-light" colspan="4">Product Details</td>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  @foreach ($products as $product)
                  <td>
                    <a href="/test/detail" class="d-none d-md-inline-block"><img class="img-thumbnail" src="img/product/pro{{$product->id}}-small.jpg" alt="product image" width="100" height="109"></a>
                    <a href="/test/detail" class="d-block font-weight-bold text-secondary"><u>{{$product->name}}</u></a>
                  </td>
                  @endforeach
                </tr>
                <tr>
                  @foreach ($products as $product)
                  <td>
                    <strong>Price:</strong>
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
                  @endforeach
                </tr>
                <!--foreach ($products as $product)-->
                <tr>
                  @for ($i=1; $i <= 4; $i++)
                  <td><strong>Model:</strong><div>Model {{$i}}</div></td>
                  @endfor
                </tr>
                <tr>
                  @for ($i=1; $i <= 4; $i++)
                  <td><strong>Brand:</strong><div>Brand {{$i}}</div></td>
                  @endfor
                </tr>
                <tr>
                  @for ($i=1; $i <= 4; $i++)  <!--foreach ($products as $product)-->
                  <td><strong>Availability:</strong><div>Availability {{$i}}</div></td>
                  @endfor
                </tr>
                <tr>
                  @foreach ($products as $product)
                  <td>
                    <strong>Rating:</strong>
                    <div class="rating">
                      @php
                        $sta=0;
                        $total=0;
                        for($i = 0 ; $i <= ($product->star) ; $i++){
                          if($i % 2 == 0 AND $i != 0){
                            echo '<i class="material-icons md-1 align-text-bottom">star</i>';
                            $sta++;
                          }else{
                            $total++;
                          }
                        }
                        while ($sta < 5){
                          if($total % 2 == 0){
                            echo '<i class="material-icons md-1 align-text-bottom">star_border</i>';
                            $sta++;
                          }else{
                            echo '<i class="material-icons md-1 align-text-bottom">star_half</i>';
                              $sta++;
                              $total++;
                          }
                        }
                      @endphp
                    </div>
                    <a href="#" class="text-secondary small d-none d-md-inline-block">( reviews)</a><!--count($product->reviews)-->
                  </td>
                    @endforeach
                </tr>
                <tr>
                  @foreach ($products as $product)
                  <td class="d-none d-md-table-cell"><strong>Description:</strong><div>{{$product->msg[$i]}}</div></td>
                  @endforeach
                </tr>
                <tr>
                 @foreach ($products as $product)
                  <td>
                    <div class="btn-group" role="group" aria-label="Compare action">
                      <button type="button" class="btn btn-sm btn-theme"><i class="material-icons">add_circle</i> Add to cart</button>
                      <button type="button" class="btn btn-sm btn-secondary"><i class="material-icons">cancel</i></button>
                    </div>
                  </td>
                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
          <button class="btn btn-sm btn-secondary btn-block">Clear All</button>
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
