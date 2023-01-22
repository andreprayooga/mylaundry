@extends('layouts.auth')

@section('title', 'Login Account')

@section('main')
<div class="az-signup-wrapper">
  <div class="az-column-signup-left">
    <a href="https://github.com/andreprayooga/mylaundry" target="_blank" class="btn btn-outline-indigo">Documentation</a>
  </div><!-- az-column-signup-left -->

  <div class="az-column-signup">
    <div class="az-signin-header">
      <h2>Welcome back!</h2>
      <h4>Please login to continue your session.</h4>
  
    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

      <form action="/login" method="POST">
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
          <label>Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="*****" value="">
        </div><!-- form-group -->

        <button type="submit" class="btn btn-az-primary btn-block">Login</button>
      </form>
    </div><!-- az-signin-header -->

    <div class="az-signin-footer">
      <p><a href="">Forgot password?</a></p>
      <p>Login as courier? <a href="#" data-toggle="modal" data-target="#loginCourierModal">Continue</a></p>
    </div><!-- az-signin-footer -->

  </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->
@endsection