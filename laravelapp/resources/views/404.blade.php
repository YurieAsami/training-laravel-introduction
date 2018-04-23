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
    <title>Page not Found - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['nowpage'=>'404'])

    <div class="breadcrumb-container">
      <div class="container-fluid limited">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/test/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Page not Found</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col text-center">
          <div class="alert alert-info" role="alert">
          <h1 class="roboto-condensed"><i class="material-icons md-3">error_outline</i> Error 404 Page Not Found</h1>
          <h4>The page you were looking for doesn't exist.</h4>
          <div class="btn-group btn-group-sm mt-3 mb-5" role="group" aria-label="error 404 action">
            <a class="btn btn-outline-theme" href="javascript:history.back()" role="button"><i class="fa fa-arrow-left"></i> Go Back</a>
            <a class="btn btn-theme" href="/test/index" role="button"><i class="fa fa-home"></i> Home</a>
          </div>
          <p>Think this is an error? Please <a href="/test/contact"><u>let us know.</u></a></p>
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
