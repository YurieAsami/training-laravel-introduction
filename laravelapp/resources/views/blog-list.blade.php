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
    <title>Blog List - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body>

@include('components.topheader',['page'=>'Blog List'])
    <div class="container-fluid limited mb-5">
      <div class="row">
        <div class="col-md-8 mb-3">
          <div class="title"><span>Latest Blog</span></div>
          <div class="row">
            <div class="col-12">
              @foreach ($blogs as $blog)
              <div class="media hover-style media-list">
                <a href="/test/blog-detail">
                  <div data-cover="/img/blog/blog{{$blog->id}}.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="200px" data-lg-height="200px" data-xl-height="200px">
                  </div>
                </a>
                <div class="media-body">
                  <ul class="list-inline mb-1">
                    <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">access_time</i> Jan 01, 18{{$blog->access_time}}</small></li>
                    <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">person_outline</i> <a href="" class="text-muted">Admin{{$blog->admin}}</a></small></li>
                    <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">flag</i> <a href="" class="text-muted">Tags{{$blog->tags}}</a></small></li>
                  </ul>
                  <a href="/test/blog-detail" class="h4">{{$blog->title}}</a>
                  <p class="card-text">{{$blog->submsg}}</p>
                  <a class="btn btn-sm btn-theme" href="/test/blog-detail" role="button">Read More</a>
                </div>
              </div>
              @endforeach
            </div>
            <div class="col-12">
              <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                  {{$blogs->links()}}
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="title"><span>Categories</span></div>
          <div class="list-group mb-4">
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0 border-top-0">&raquo; News</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; Events</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; Promotions</a>
          </div>
          <div class="title"><span>Archives</span></div>
          <div class="list-group">
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0 border-top-0">&raquo; January 2018</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; February 2018</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; March 2018</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; April 2018</a>
            <a href="/test/blog" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0">&raquo; May 2018</a>
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
