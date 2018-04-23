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
        <div class="form-group">
          <label for="inputUsername">Username</label>
          <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
      <form>    <input type="password" class="form-control" id="inputPassword" placeholder="Password"></form>
          <div class="text-right">
            <a href="#" class="text-secondary"><small>Forgot Password ?</small></a>
          </div>
        </div>
        <div class="custom-control custom-checkbox mt-1">
          <input type="checkbox" class="custom-control-input" id="checkRemember">
          <label class="custom-control-label" for="checkRemember">Remember me</label>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <div class="btn-group" role="group" aria-label="Login Action">
          <a href="/test/register" class="btn btn-outline-theme" role="button">I want to Sign Up</a>
          <button type="submit" class="btn btn-theme">SIGN IN</button>
        </div>
      </div>
    </div>
  </div>
</div>
