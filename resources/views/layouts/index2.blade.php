<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Artikel Berkualitas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/baru-template/css/style.css')}}">
  
  
  </head>
  <body>
    
    @include('layouts.baru-template.navbar')
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    @yield('content')

    @include('layouts.baru-template.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets/frontend/baru-template/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/aos.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/particles.min.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/particle.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/frontend/baru-template/js/google-map.js')}}"></script>
  <script src="{{asset('assets/frontend/baru-template/js/main.js')}}"></script>
    
  </body>
</html>