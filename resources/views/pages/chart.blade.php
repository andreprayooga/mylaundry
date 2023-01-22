@extends('layouts.content')

@section('title' , 'Chart')

@section('main')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
  <div class="az-content-breadcrumb">
    <span>Components</span>
    <span>Tables</span>
    <span>Basic Tables</span>
  </div>
  <h2 class="az-content-title">Basic Tables</h2>

  <div class="az-content-label mg-b-5">Bordered Table</div>
  <p class="mg-b-20">Add borders on all sides of the table and cells.</p>

  <div class="table-responsive">
    <table class="table table-bordered mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Position</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>$320,800</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Garrett Winters</td>
          <td>Accountant</td>
          <td>$170,750</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>$86,000</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Cedric Kelly</td>
          <td>Senior Javascript Developer</td>
          <td>$433,060</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>$162,700</td>
        </tr>
      </tbody>
    </table>
  </div><!-- table-responsive -->

  <hr class="mg-y-30">

  <div class="az-footer mg-t-auto">
    <div class="container">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div><!-- container -->
  </div><!-- az-footer -->
</div><!-- az-content-body -->
@endsection