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
    <title>Contact - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Contact Us'])

    <div class="container-fluid limited mb-5">
      <div class="row">
        <!--<div class="col-md-8 mb-3">
          <div class="title"><span>お問い合わせ</span></div>
          <form>
            <div class="form-group">
              <label for="InputName">お名前</label>
              <input type="text" class="form-control" id="InputName" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="InputEmail1">メールアドレス</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="InputSubject">件名</label>
              <input type="text" class="form-control" id="InputSubject" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="InputMessage">メッセージ</label>
              <textarea class="form-control" id="InputMessage" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-theme btn-sm">送信</button>
          </form>
        </div>-->
        <div class="col-md-4">
          <div class="title"><span>企業情報</span></div>
          <ul class="list-group mb-4">
            <li class="list-group-item pl-2 border-left-0 border-right-0 border-top-0">&raquo; 新宿区西新宿</li>
            <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; +03-1234-5678</li>
            <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; y.asami@fosbury.co.jp</li>
          </ul>
          <div class="title"><span>アクセス</span></div>
          <div class="embed-responsive embed-responsive-4by3 rounded">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5449.573103691578!2d139.68837585470655!3d35.693359376198266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd4cfbaff57%3A0x12385d2a418fd33d!2z44CSMTYwLTAwMjMg5p2x5Lqs6YO95paw5a6_5Yy66KW_5paw5a6_!5e0!3m2!1sja!2sjp!4v1524619798668"></iframe>
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
