<!-- Modal Cart -->
<div class="modal fade modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">You have {{$cart}} items in your bag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        @if($carts!==NULL)
        @foreach ($carts as $cart)
        <div class="media">
          <a href="/test/detail" class="mr-2"><img class="img-fluid rounded" src="/img/product/polo1-small.jpg" width="70" alt="Generic placeholder image"></a>
          <div class="media-body">
            <div><a href="/test/detail" class="text-dark">{{$cart->product->name}}</a></div>
            <span class="text-secondary"><span class="mr-3">x{{$cart->count}}</span>{{$cart->product->price}}円</span>
            <form action="/test/cartdrop" method="post">
              {{ csrf_field() }}
              <div><input name="id" type="hidden" value="{{$cart->product->id}}"></div>
              <div><input name="name" type="hidden" value="{{$cart->product->name}}"></div>
            <button class="close text-danger"><i class="material-icons">close</i></button></form>
          </div>
        </div>
        @endforeach
        @else
          <div class="media">
          </div>
        @endif
        </div>
      </div>
      <div class="modal-footer justify-content-center border-top-0">
        <div class="btn-group" role="group" aria-label="Cart Action">
          <a href="/test/cart" class="btn btn-outline-theme" role="button">VIEW CART</a>
          <a href="/test/checkout" class="btn btn-theme" role="button">CHECKOUT</a>
        </div>
      </div>
    </div>
  </div>
</div>
