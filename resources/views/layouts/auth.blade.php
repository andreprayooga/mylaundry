<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>myLaundry &mdash; @yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('library/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('library/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('library/typicons.font/typicons.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('css/azia.css') }}">

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
  </head>
  <body class="az-body">

    {{-- Authentication --}}
      @yield('main')

      {{-- Modal --}}
      @include('components._modal')

    <script src="{{ asset('library/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('library/ionicons/ionicons.js') }}"></script>
    {{-- <script src="../js/jquery.cookie.js" type="text/javascript"></script> --}}

    <script src="{{ asset('js/azia.js') }}"></script>
    <script>
      $(function(){
        'use strict'
      });
    </script>
  </body>
</html>
