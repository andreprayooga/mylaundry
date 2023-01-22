<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-purple" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Login Courier Modal-->
<div class="modal fade" id="loginCourierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login as Courier</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    
      <div class="modal-body">
        <form action="/login-courier" method="POST">
          @csrf
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="@mail.co" value="{{ old('email') }}" autocomplete="off" autofocus>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div><!-- form-group -->

          <div class="form-group">
            <label>Pin Access</label>
            <input type="tex" class="form-control @error('pin_access') is-invalid @enderror" name="pin_access" id="pin_access" placeholder="@mail.co" value="{{ old('pin_access') }}" autocomplete="off" autofocus>
            @error('pin_access')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div><!-- form-group -->
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-purple">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>