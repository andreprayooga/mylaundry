@extends('layouts.auth')

@section('title', 'Login Account')

@section('main')
<div class="az-signup-wrapper">
  <div class="az-column-signup-left">
    <div>
      <i class="typcn typcn-chart-bar-outline"></i>
      <h1 class="az-logo">az<span>i</span>a</h1>
      <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
      <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
      <p>Browse our site and see for yourself why you need Azia.</p>
      <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
    </div>
  </div><!-- az-column-signup-left -->

  <div class="az-column-signup">
    <div class="az-signup-header">
      <h2>Welcome Back!</h2>
      <h4>Sign in to continue your session.</h4>

      <form action="page-profile.html">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <button type="submit" class="btn btn-az-primary btn-block">Login</button>
      </form>
    </div><!-- az-signup-header -->

    <div class="az-signup-footer">
      <p>Already have an account? <a href="page-signin.html">Sign In</a></p>
    </div><!-- az-signin-footer -->

  </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->
@endsection