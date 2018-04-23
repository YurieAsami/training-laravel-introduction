@php
$items[]=array('title'=>'local_shipping','icon'=>'FREE SHIPPING &AMP; RETURN','message'=>'Get free shipping for all orders $99 or more');
$items[]=array('title'=>'refresh','icon'=>'MONEY BACK GUARANTEE','message'=>'Get the item you ordered, or your money back');
$items[]=array('title'=>'security','icon'=>'100% SECURE PAYMENT','message'=>'Your transaction are secure with SSL Encryption');
$items[]=array('title'=>'phone','icon'=>'ONLINE SUPPORT 24/7','message'=>'Chat with experts or have us call you right away');
@endphp

<!-- Service Block -->
<div class="row no-gutters mb-3">
  @foreach ($items as $item)
  <div class="col-sm-6 col-lg-3">
    <div class="media service-block">
      <div class="service-block-icon">
        <i class="material-icons">{{$item['title']}}</i>
      </div>
      <div class="media-body">
        <h6>{{$item['icon']}}</h6>
        <div class="service-block-desc">{{$item['message']}}</div>
      </div>
    </div>
  </div>
 @endforeach
</div>
<!-- /Service Block -->
