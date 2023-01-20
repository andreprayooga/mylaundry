@extends('layouts.auth')

@section('title', 'Register Account')

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
    <h1 class="az-logo">az<span>i</span>a</h1>
    <div class="az-signup-header">
      <h2>Get Started</h2>
      <h4>It's free to signup and only takes a minute.</h4>

      <form action="page-profile.html">
        <div class="form-group">
          <label>Firstname &amp; Lastname</label>
          <input type="text" class="form-control" placeholder="Enter your firstname and lastname">
        </div><!-- form-group -->
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <button class="btn btn-az-primary btn-block">Create Account</button>
        <div class="row row-xs">
          <div class="col-sm-6"><button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button></div>
          <div class="col-sm-6 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button></div>
        </div><!-- row -->
      </form>
    </div><!-- az-signup-header -->

    <div class="az-signup-footer">
      <p>Already have an account? <a href="page-signin.html">Sign In</a></p>
    </div><!-- az-signin-footer -->

  </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->
@endsection