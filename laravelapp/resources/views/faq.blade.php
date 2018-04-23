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
    <title>FAQ - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['nowpage'=>'FAQ'])

    <div class="breadcrumb-container">
      <div class="container-fluid limited">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/test/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
          </ol>
        </nav>
      </div>
    </div>
@php
  $questions[]=array('1'=>['q'=>'I see different prices with the same title. Why?','a'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.'],'2'=>['q'=>'Why do I see different prices for the same product?','a'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis ipsa expedita, earum esse omnis delectus possimus fugit perferendis ex veritatis veniam consequuntur mollitia, facilis vel velit voluptatem eos ut!'],'3'=>['q'=>'Is it necessary to have an account to shop on Marketshop?','a'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, quisquam, corrupti. Perspiciatis maxime provident in vero dolore similique quam voluptatum eum reiciendis ex repellat a saepe, explicabo odit quae perferendis!'],'4'=>['q'=>'What do I need to know before getting an order gift wrapped?','a'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perferendis, similique a accusamus ipsum incidunt repellendus quis, soluta, minus molestiae illum eligendi id hic eum accusantium voluptatem quae facilis architecto.'],'5'=>['q'=>'What is Advantage?','a'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.']);
@endphp

    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col-12 mb-4">
          <div class="title"><span>Frequently Asked Questions (FAQ)</span></div>
        </div>

        <div class="col-md-3">
          <h5><i class="material-icons">shopping_cart</i> Shopping</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion1" role="tablist" class="mb-3">
            @foreach ($questions as $question)
              @php
                $i=1;
              @endphp
              @foreach ($question as $value)
                <div class="card mb-1">
                  <div class="card-header p-2" role="tab" id="heading1-{{$i}}">
                    <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse"   href="#collapse1-{{$i}}" aria-expanded="false" aria-controls="collapse1-{{$i}}">{{$value['q']}}</a>
                  </div>
                <div id="collapse1-{{$i}}" class="collapse" role="tabpanel" aria-labelledby="heading1-{{$i}}" data-parent="#accordion1">
                  <div class="card-body">
                    {{$value['a']}}
                  </div>
                </div>
              </div>
              @php
                $i++;
              @endphp
              @endforeach
            @endforeach
          </div>
        </div>

        <div class="col-md-3">
          <h5><i class="material-icons">monetization_on</i> Payments</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion2" role="tablist" class="mb-3">
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-1">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">
                    How do I pay for a purchase?
                </a>
              </div>
              <div id="collapse2-1" class="collapse" role="tabpanel" aria-labelledby="heading2-1" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-2">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                    Are there any hidden charges (Octroi or Sales Tax) when I make a purchase?
                </a>
              </div>
              <div id="collapse2-2" class="collapse" role="tabpanel" aria-labelledby="heading2-2" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis ipsa expedita, earum esse omnis delectus possimus fugit perferendis ex veritatis veniam consequuntur mollitia, facilis vel velit voluptatem eos ut!
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-3">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
                    What is Cash on Delivery?
                </a>
              </div>
              <div id="collapse2-3" class="collapse" role="tabpanel" aria-labelledby="heading2-3" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, quisquam, corrupti. Perspiciatis maxime provident in vero dolore similique quam voluptatum eum reiciendis ex repellat a saepe, explicabo odit quae perferendis!
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-4">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-4" aria-expanded="false" aria-controls="collapse2-4">
                    How do I pay using a credit/debit card?
                </a>
              </div>
              <div id="collapse2-4" class="collapse" role="tabpanel" aria-labelledby="heading2-4" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perferendis, similique a accusamus ipsum incidunt repellendus quis, soluta, minus molestiae illum eligendi id hic eum accusantium voluptatem quae facilis architecto.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-5">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-5" aria-expanded="false" aria-controls="collapse2-5">
                    Is it safe to use my credit/debit card on this store?
                </a>
              </div>
              <div id="collapse2-5" class="collapse" role="tabpanel" aria-labelledby="heading2-5" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-6">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-6" aria-expanded="false" aria-controls="collapse2-6">
                    What is a 3D Secure password?
                </a>
              </div>
              <div id="collapse2-6" class="collapse" role="tabpanel" aria-labelledby="heading2-6" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-7">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-7" aria-expanded="false" aria-controls="collapse2-7">
                    How can I get the 3D Secure password for my credit/debit card?
                </a>
              </div>
              <div id="collapse2-7" class="collapse" role="tabpanel" aria-labelledby="heading2-7" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-8">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-8" aria-expanded="false" aria-controls="collapse2-8">
                    Can I use my bank's Internet Banking feature to make a payment?
                </a>
              </div>
              <div id="collapse2-8" class="collapse" role="tabpanel" aria-labelledby="heading2-8" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-9">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-9" aria-expanded="false" aria-controls="collapse2-9">
                    Can I make a credit/debit card or Internet Banking payment through my mobile?
                </a>
              </div>
              <div id="collapse2-9" class="collapse" role="tabpanel" aria-labelledby="heading2-9" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-10">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-10" aria-expanded="false" aria-controls="collapse2-10">
                    How does 'Instant Cashback' work?
                </a>
              </div>
              <div id="collapse2-10" class="collapse" role="tabpanel" aria-labelledby="heading2-10" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading2-11">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse2-11" aria-expanded="false" aria-controls="collapse2-11">
                    How do I place a Cash on Delivery (COD) order?
                </a>
              </div>
              <div id="collapse2-11" class="collapse" role="tabpanel" aria-labelledby="heading2-11" data-parent="#accordion2">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h5><i class="material-icons">person</i> My Account &amp; My Orders</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion3" role="tablist" class="mb-3">
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading3-1">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">
                    What is 'My Account'? How do I update my information ?
                </a>
              </div>
              <div id="collapse3-1" class="collapse" role="tabpanel" aria-labelledby="heading3-1" data-parent="#accordion3">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading3-2">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
                    How do I merge my accounts linked to different email ids?
                </a>
              </div>
              <div id="collapse3-2" class="collapse" role="tabpanel" aria-labelledby="heading3-2" data-parent="#accordion3">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading3-3">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">
                    How do I know my order has been confirmed?
                </a>
              </div>
              <div id="collapse3-3" class="collapse" role="tabpanel" aria-labelledby="heading3-3" data-parent="#accordion3">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading3-4">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">
                    Can I order a product that is 'Out of Stock'?
                </a>
              </div>
              <div id="collapse3-4" class="collapse" role="tabpanel" aria-labelledby="heading3-4" data-parent="#accordion3">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h5><i class="material-icons">card_giftcard</i> Gift Voucher</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion4" role="tablist" class="mb-3">
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-1">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-1" aria-expanded="false" aria-controls="collapse4-1">
                    How do I buy/gift an e-Gift Voucher?
                </a>
              </div>
              <div id="collapse4-1" class="collapse" role="tabpanel" aria-labelledby="heading4-1" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-2">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-2" aria-expanded="false" aria-controls="collapse4-2">
                    How do I make a purchase with an e-Gift Voucher?
                </a>
              </div>
              <div id="collapse4-2" class="collapse" role="tabpanel" aria-labelledby="heading4-2" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-3">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-3" aria-expanded="false" aria-controls="collapse4-3">
                    Does an e-Gift Voucher expire?
                </a>
              </div>
              <div id="collapse4-3" class="collapse" role="tabpanel" aria-labelledby="heading4-3" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-4">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-4" aria-expanded="false" aria-controls="collapse4-4">
                    Can I use promotional codes with e-Gift Vouchers?
                </a>
              </div>
              <div id="collapse4-4" class="collapse" role="tabpanel" aria-labelledby="heading4-4" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-5">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-5" aria-expanded="false" aria-controls="collapse4-5">
                    Is there a limit on how many e-Gift vouchers I can use on a single order?
                </a>
              </div>
              <div id="collapse4-5" class="collapse" role="tabpanel" aria-labelledby="heading4-5" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading4-6">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse4-6" aria-expanded="false" aria-controls="collapse4-6">
                    What Terms & Conditions apply to e-Gift Vouchers?
                </a>
              </div>
              <div id="collapse4-6" class="collapse" role="tabpanel" aria-labelledby="heading4-6" data-parent="#accordion4">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h5><i class="material-icons">help</i> Order Status</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion5" role="tablist" class="mb-3">
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading5-1">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse5-1" aria-expanded="false" aria-controls="collapse5-1">
                    How do I check the current status of my orders?
                </a>
              </div>
              <div id="collapse5-1" class="collapse" role="tabpanel" aria-labelledby="heading5-1" data-parent="#accordion5">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading5-2">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse5-2" aria-expanded="false" aria-controls="collapse5-2">
                    What do the different order status mean?
                </a>
              </div>
              <div id="collapse5-2" class="collapse" role="tabpanel" aria-labelledby="heading5-2" data-parent="#accordion5">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading5-3">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse5-3" aria-expanded="false" aria-controls="collapse5-3">
                    When and how can I cancel an order?
                </a>
              </div>
              <div id="collapse5-3" class="collapse" role="tabpanel" aria-labelledby="heading5-3" data-parent="#accordion5">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h5><i class="material-icons">local_shipping</i> Shipping</h5>
        </div>
        <div class="col-md-9 mb-4">
          <div id="accordion6" role="tablist" class="mb-3">
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-1">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-1" aria-expanded="false" aria-controls="collapse6-1">
                    What are the delivery charges?
                </a>
              </div>
              <div id="collapse6-1" class="collapse" role="tabpanel" aria-labelledby="heading6-1" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-2">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-2" aria-expanded="false" aria-controls="collapse6-2">
                    Are there any hidden costs (sales tax, octroi etc) on items sold by sellers?
                </a>
              </div>
              <div id="collapse6-2" class="collapse" role="tabpanel" aria-labelledby="heading6-2" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-3">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-3" aria-expanded="false" aria-controls="collapse6-3">
                    What is the estimated delivery time?
                </a>
              </div>
              <div id="collapse6-3" class="collapse" role="tabpanel" aria-labelledby="heading6-3" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-4">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-4" aria-expanded="false" aria-controls="collapse6-4">
                    Why does the estimated delivery time vary from seller to seller?
                </a>
              </div>
              <div id="collapse6-4" class="collapse" role="tabpanel" aria-labelledby="heading6-4" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-5">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-5" aria-expanded="false" aria-controls="collapse6-5">
                    Why does the delivery date not correspond to the delivery timeline mentioned?
                </a>
              </div>
              <div id="collapse6-5" class="collapse" role="tabpanel" aria-labelledby="heading6-5" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-6">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-6" aria-expanded="false" aria-controls="collapse6-6">
                    Seller does not/cannot ship to my area. Why?
                </a>
              </div>
              <div id="collapse6-6" class="collapse" role="tabpanel" aria-labelledby="heading6-6" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-7">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-7" aria-expanded="false" aria-controls="collapse6-7">
                    I need to return an item, how do I arrange for a pick-up?
                </a>
              </div>
              <div id="collapse6-7" class="collapse" role="tabpanel" aria-labelledby="heading6-7" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
            <div class="card mb-1">
              <div class="card-header p-2" role="tab" id="heading6-8">
                <a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse6-8" aria-expanded="false" aria-controls="collapse6-8">
                    Does deliver internationally?
                </a>
              </div>
              <div id="collapse6-8" class="collapse" role="tabpanel" aria-labelledby="heading6-8" data-parent="#accordion6">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="alert alert-info" role="alert">
            Was this article helpful ? <a href="#" class="alert-link">Yes</a> / <a href="/test/contact" class="alert-link">No, I want to contact support</a>
          </div>
        </div>
      </div>
    </div>

    @include('components.modal-menu')
    @include('components.cart',['carts'=>$carts,'cart'=>$cart])
    @include('components.modal-login')
    @include('components.footer')

    <!-- Copyright -->
    <div class="copyright">
      Copyright © 2018 Mimity All right reserved
    </div>
    <!-- /Copyright -->

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
