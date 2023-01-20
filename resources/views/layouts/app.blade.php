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
  <link href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="{{ asset('css/azia.css') }}">

	<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-90680653-2');
  </script>

</head>

<body>

	<div id="content-wrapper">

		{{-- Header --}}
		@include('components._header')
	
			{{-- Main Content --}}
			@yield('main')
	
		{{-- Footer --}}
		@include('components._footer')

		{{-- Modal --}}
		@include('components._modal')

	</div>


  <script src="{{ asset('library/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('library/ionicons/ionicons.js') }}"></script>
  <script src="{{ asset('library/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('library/jquery.flot/jquery.flot.resize.j') }}s"></script>
  <script src="{{ asset('library/chart.js/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('library/peity/jquery.peity.min.js') }}"></script>

  <script src="{{ asset('js/azia.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/chart.flot.sampledata.js') }}"></script>
  <script src="{{ asset('js/dashboard.sampledata.js') }}"></script>
  {{-- <script src="js/jquery.cookie.js" type="text/javascript"></script> --}}
</body>

</html>