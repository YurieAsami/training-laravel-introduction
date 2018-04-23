<!-- Top Categories -->

@php
  $cates[]=array('jpg'=>'type-polo','title'=>'Polo T-Shirts');
  $cates[]=array('jpg'=>'type-round','title'=>'Round Neck T-Shirts');
  $cates[]=array('jpg'=>'type-vneck','title'=>'V Neck T-Shirts');
  $cates[]=array('jpg'=>'type-hooded','title'=>'Hooded T-Shirts');
@endphp

<div class="row mb-5 compact">
  <div class="col-12">
    <div class="title text-center"><span>Top Categories</span></div>
  </div>
@foreach ($cates as $cate)
  <div class="col-6 col-md-4 col-lg-3 mb-2 mb-md-0">
    <div class="card hover-style2 border-white text-white">
      <img class="card-img" src="/img/product/{{$cate['jpg']}}.jpg" alt="Card image">
      <a href="/test/grid">
        <div class="card-img-overlay d-flex align-items-center justify-content-center">
          <h4 class="card-title text-white font-weight-normal text-center become-h6">{{$cate['title']}}</h4>
        </div>
      </a>
    </div>
  </div>
@endforeach
</div>
<!-- /Top Categories -->
