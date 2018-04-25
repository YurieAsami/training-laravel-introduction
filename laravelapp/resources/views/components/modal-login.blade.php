<!-- Modal Login -->
<div class="modal fade modal-login" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Enter Your Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/test/index" method="post">
          {{ csrf_field() }}
        <div class="form-group">
          <label for="inputUsername">ログイン名</label>
          <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username" name="login">
        </div>
        <div class="form-group">
          <label for="inputPassword">パスワード</label>
         <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <div class="btn-group" role="group" aria-label="Login Action">
          <button type="submit" class="btn btn-theme">ログイン</button></form>
        </div>
      </div>
    </div>
  </div>
</div>
