<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Pesona<span>Adat</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ url('/beranda') }}" class="nav-link">Home</a></li>
          
          <li class="nav-item active"><a href="{{ url('/koleksi') }}" class="nav-link">Koleksi</a></li>


          <!-- Login -->
          <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
          

          

          <!-- Register Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="registerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register
            </a>
            <div class="dropdown-menu" aria-labelledby="registerDropdown">
              <a class="dropdown-item" href="{{ url('/register-penyewa') }}">Register Penyewa</a>
              <a class="dropdown-item" href="{{ url('/register-pemiliktoko') }}">Register Pemilik Toko</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Footer -->
  @yield('konten')
  <footer class="ftco-footer ftco-section img" style="background-image: url(assets/images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <!-- Footer content same as before -->
        <!-- ... -->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
            This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Colorlib</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>
