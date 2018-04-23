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
    <title>Contact Us - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['nowpage'=>'Contact Us'])
    <div class="breadcrumb-container">
      <div class="container-fluid limited">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/test/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col-md-8 mb-3">
          <div class="title"><span>Contact Us</span></div>
          <form>
            <div class="form-group">
              <label for="InputName">Your Name (*)</label>
              <input type="text" class="form-control" id="InputName" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="InputEmail1">Email address (*)</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="InputSubject">Subject</label>
              <input type="text" class="form-control" id="InputSubject" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="InputMessage">Message (*)</label>
              <textarea class="form-control" id="InputMessage" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-theme btn-sm">Submit</button>
          </form>
        </div>
        <div class="col-md-4">
          <div class="title"><span>Contact Info</span></div>
          <ul class="list-group mb-4">
            <li class="list-group-item pl-2 border-left-0 border-right-0 border-top-0">&raquo; 212 Lorem Ipsum. Dolor Sit, Amet</li>
            <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; +123-456-789</li>
            <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; cs@domain.tld</li>
          </ul>
          <div class="title"><span>Our Location</span></div>
          <div class="embed-responsive embed-responsive-4by3 rounded">
            <iframe class="embed-responsive-item" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=central%2Bpark&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe>
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
