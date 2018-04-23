<!-- Flash Sale -->
<div class="row mb-3 compact">
  <div class="col-12">
    <div class="title text-center"><span><i class="material-icons align-text-bottom text-warning">flash_on</i>FLASH SALE<span id="flash-sale-countdown" class="bg-theme text-white px-2 rounded ml-3 small"></span></span></div>
  </div>
  @foreach ($products as $product)
  <div class="col-6 col-sm-4 col-md-3 col-lg col-xl-2">
    <div class="card card-product">
      <a href="/test/detail"><img class="card-img-top" src="/img/product/pro{{$product->id}}.jpg" alt="Card image cap"></a>
      <div class="card-body">
        <div class="card-title"><a href="/test/detail" title="{{$product->name}}">{{$product->name}}</a></div>
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
        <div class="attribute attribute-right rating">
          @include('components.star')
        </div>
        <div class="action">
          <div class="btn-group btn-group-sm" role="group" aria-label="Action">
            <button class="btn btn-outline-theme show-quickview"><i class="material-icons">zoom_in</i></button>
            <button class="btn btn-theme">ADD TO CART</button>
            <button class="btn btn-outline-theme"><i class="material-icons">favorite_border</i></button>
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
  </div>
@endforeach

</div>
<!-- /Flash Sale -->
