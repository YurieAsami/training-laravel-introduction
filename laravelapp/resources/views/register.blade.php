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
              <h5 class="card-title text-center">会員登録</h5>
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
                    <label for="InputName" style={{$color}}>お名前</label>
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
                    <label for="InputLoginName" style={{$color}}>ログイン名</label>
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
                    <label for="InputPassword" style={{$color}}>パスワード</label>
                    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
                    @foreach ($errors->get('password') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputPassword2" style="font-size : 12px;">もう一度パスワードを入力してください</label>
                    <input type="password" class="form-control" id="InputPassword2" placeholder="Confirm Password" name="password_confirmation">
                  </div>
                  <div class="form-group col-md-6" >
                    @php
                      if(count($errors->get('email'))>0){
                        $color="color:red";
                      }else{
                        $color="color:black";
                      }
                    @endphp
                    <label for="InputEmail" style={{$color}}>メールアドレス</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email" name="email" value="{{old('email')}}">
                    @foreach ($errors->get('email') as $error)
                      <li style="font-size : 12px;">{{ $error }}</li>
                    @endforeach
                  </div>

                </div>
                <div class="form-group">
                  @php
                    if(count($errors->get('zip'))>0){
                      $color="color:red";
                    }else{
                      $color="color:black";
                    }
                  @endphp
                  <label class="mb-0" for="InpuZip" style={{$color}}>郵便番号</label>
                  <input class="form-control" id="InputAddress" name="zip"  value="{{old('zip')}}"></input>
                  @foreach ($errors->get('zip') as $error)
                    <li style="font-size : 12px;">{{ $error }}</li>
                  @endforeach
                </div>
                <div class="form-group">
                  @php
                    if(count($errors->get('address'))>0){
                      $color="color:red";
                    }else{
                      $color="color:black";
                    }
                  @endphp
                  <label class="mb-0" for="InputAddress" style={{$color}}>住所</label>
                  <textarea class="form-control" id="InputAddress" rows="2" name="address"  value="{{old('address')}}"></textarea>
                  @foreach ($errors->get('address') as $error)
                    <li style="font-size : 12px;">{{ $error }}</li>
                  @endforeach
                </div>
                <button type="submit" class="btn btn-theme btn-sm btn-block my-3">送信</button>
                <div class="form-group text-right">
                  <a href="/test/login" class="text-secondary"><small><u>ログインはこちらから</u></small></a>
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
