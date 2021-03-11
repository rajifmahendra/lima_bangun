<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PT. LIMA BANGUN PERSADA</title>
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/logo.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/logo.png') }}">
  <link rel="stylesheet" href="{{ asset('template/html/css/bootstrap.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>		
  <link rel="stylesheet" href="{{ asset('template/html/css/icons-fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('template/html/css/style.css') }}">
  <link rel='stylesheet' href="{{ asset('template/html/css/animate.min.css') }}">
  <style>
    .main-text-color {
      color: #114661;
    }
    .main-bg-color {
      background: transparent;
      background-image: linear-gradient(to right bottom, #104057, #10445e, #114865, #124b6c, #154f73);
    }
    .main-border-color {
      border-color: #114661;
    }
    .affix.black-header .header-wrapper {
      background: transparent;
      background-image: linear-gradient(to right bottom, #104057, #10445e, #114865, #124b6c, #154f73);
    }
  </style>
</head>
<body>
  <div id="loader-overflow">
    <div id="loader3">Please enable JS</div>
  </div>
  <div id="wrap" class="boxed ">
    <div class="grey-bg">
      @include('includes.header')
      @yield('content')
      @include('includes.footer')
    </div>	
  </div>
  <script src="{{ asset('template/html/js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('template/html/js/bootstrap.min.js') }}"></script>
  <script src='{{ asset('template/html/js/jquery.magnific-popup.min.js') }}'></script>
  <script src="{{ asset('template/html/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/html/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/html/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/html/js/jquery.countTo.js') }}"></script>
  <script src="{{ asset('template/html/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('template/html/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template/html/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('template/html/js/main.js') }}"></script>
  @yield('js')
</body>
</html>