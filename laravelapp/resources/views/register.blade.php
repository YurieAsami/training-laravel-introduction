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
    <title>Register - Mimity</title>

    <!-- Required css -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Plugins css -->

    <!-- Template css -->
    <link rel="stylesheet" href="/css/style.min.css">
  </head>
  <body class="body-pattern">

@include('components.topheader',['nowpage'=>'Register'])

    <div class="container-fluid limited mb-5">
      <div class="row justify-content-center mt-4">
        <div class="col-xs-12 col-lg-6 col-md-8">
          <div class="card">
            <div class="card-body pt-2">
              <div class="text-center">
                <div class="d-inline-block border border-secondary rounded-circle text-center m-auto">
                  <h1 class="px-2"><i class="material-icons align-middle md-3">person</i></h1>
                </div>
              </div>
              <h5 class="card-title text-center">Create an Account</h5>
              <form action="/test/register" method="post">
                {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    @php
                      if(count($errors->get('name'))>0){
                        $color="color:red";
                      }else{
                        $color="color:black";
                      }
                    @endphp
                    <label for="InputName" style={{$color}}>Name</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Enter Name" name="name" value="{{old('name')}}">
                    @foreach ($errors->get('name') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>
                  <div class="form-group col-md-6">
                    @php
                      if(count($errors->get('login'))>0){
                        $color="color:red";
                      }else{
                        $color="color:black";
                      }
                    @endphp
                    <label for="InputLoginName" style={{$color}}>Login Name</label>
                    <input type="text" class="form-control" id="InputLoginName" placeholder="Enter LoginName" name="login" value="{{old('login')}}">
                    @foreach ($errors->get('login') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>
                  <div class="form-group col-md-6">
                    @php
                      if(count($errors->get('password'))>0){
                        $color="color:red";
                      }else{
                        $color="color:black";
                      }
                    @endphp
                    <label for="InputPassword" style={{$color}}>Password</label>
                    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
                    @foreach ($errors->get('password') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>
                  <div class="form-group col-md-6" >
                    @php
                      if(count($errors->get('email'))>0){
                        $color="color:red";
                      }else{
                        $color="color:black";
                      }
                    @endphp
                    <label for="InputEmail" style={{$color}}>Email Address</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email" name="email" value="{{old('email')}}">
                    @foreach ($errors->get('email') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="InputPassword2" placeholder="Confirm Password" name="password_confirmation">
                  </div>
                </div>
                <div class="form-group">
                  @php
                    if(count($errors->get('address'))>0){
                      $color="color:red";
                    }else{
                      $color="color:black";
                    }
                  @endphp
                  <label class="mb-0" for="InputAddress" style={{$color}}>Address</label>
                  <textarea class="form-control" id="InputAddress" rows="2" name="address"  value="{{old('address')}}"></textarea>
                  @foreach ($errors->get('address') as $error)
                    <li style="font-size : 12px;">{{ $error }}</li>
                  @endforeach
                </div>
                <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Submit</button>
                <div class="form-group text-right">
                  <a href="/test/login" class="text-secondary"><small><u>Already Registered ?</u></small></a>
                </div>
                <div class="form-group mt-3 text-center">Or Register using</div>
                <div class="text-center share-link">
                  <button type="button" class="btn btn-primary btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg> Facebook</button>
                  <button type="button" class="btn btn-info btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg> Twitter</button>
                  <button type="button" class="btn btn-danger btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" /></svg> Google Plus</button>
                </div>
              </form>
            </div>
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
