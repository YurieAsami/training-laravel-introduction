<!-- Home Slider -->
@php

$sliders[] = array('jpg'=>'1','type'=>NULL,'texttype'=>' ml-3 ml-sm-5','text'=>'<div class="d-inline-block h1 bg-theme text-white px-2 animate" data-animate="fadeRight">TOP BRANDS</div>
<div class="display-4 text-white font-weight-bold text-shadow animate duration-2" data-animate="fadeUp">MINIMUM<br/>30% - 70% OFF</div>');
$sliders[] =array('jpg'=>'2','type'=>' justify-content-end','texttype'=>' mr-3 mr-sm-5','text'=>'<div class="d-inline-block display-4 bg-dark text-white px-2 animate mb-3" data-animate="fadeLeft">T-LOVE</div>
<div class="h3 text-white font-weight-bold text-shadow animate duration-2" data-animate="fadeUp">A COMPLETE SHOPPING GUIDE ON WHAT AND<br/>HOW TO WEAR THE BEST T-SHIRTS</div>');
$sliders[] =array('jpg'=>'3','type'=>' justify-content-center','texttype'=>'','text'=>'<div class="d-inline-block h1 bg-warning font-weight-normal text-secondary px-2 animate duration-2" data-animate="fadeDown">YOUR PRAYERS ANSWERED!</div>
<div class="display-4 text-white font-weight-bold text-shadow animate duration-2" data-animate="fadeLeft">UPTO 70% OFF</div>
<div class="d-inline-block h1 bg-dark text-white px-2 animate mb-3 duration-2" data-animate="fadeRight">+ EXTRA 10% OFF</div>');
$sliders[] =array('jpg'=>'4','type'=>' justify-content-between','texttype'=>' w-100','text'=>'<div class="text-danger animate duration-2" data-animate="fadeLeft"><i class="material-icons md-5">local_shipping</i></div>
<div class="h3 bg-white px-2 animate d-inline-block text-secondary font-weight-normal delay-1" data-animate="fadeUp">FREE SHIPPING</div>
<div><div class="h1 bg-dark px-2 animate d-inline-block text-white font-weight-normal delay-1" data-animate="fadeRight">ON ALL ORDERS !</div></div>','text2'=>'</div><div class="text-center w-100"><div class="text-info animate duration-2 delay-1" data-animate="fadeRight"><i class="material-icons md-5">phone</i></div>
<div class="h3 bg-white px-2 animate d-inline-block text-secondary font-weight-normal delay-2" data-animate="fadeDown">24 HOURS</div>
<div><div class="h1 bg-dark px-2 animate d-inline-block text-white font-weight-normal delay-2" data-animate="fadeUp">ONLINE SUPPORT</div></div>');

@endphp
<div class="container-fluid">
  <div class="row">

    <div class="swiper-container home-slider">

      <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
        <div class="swiper-slide" data-cover="/img/slider/{{$slider['jpg']}}.jpg" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px">
          <div class="swiper-overlay{{$slider['type']}}">
            <div class="text-center{{$slider['texttype']}}">
  @php
              echo $slider['text'];
              if(isset($slider['text2'])){
                echo $slider['text2'];
              }
  @endphp
              <a href="/test/grid" class="btn btn-theme btn-sm mt-3 animate delay-1" data-animate="fadeDown">SHOP NOW</a>
            </div>
          </div>
        </div>
@endforeach
      </div>
       <div class="swiper-pagination"></div>

      <div class="swiper-button-prev d-none d-sm-flex" id="home-slider-prev"><i class="material-icons md-3">keyboard_arrow_left</i></div>
      <div class="swiper-button-next d-none d-sm-flex" id="home-slider-next"><i class="material-icons md-3">keyboard_arrow_right</i></div>
    </div>

  </div>
</div>
<!-- /Home Slider -->
