<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alghany Jagad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
        <nav id="colorlib-main-nav" role="navigation">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
            <div class="js-fullheight colorlib-table">
                <div class="img" style="background-image: url(images/fotogoni2.jpg);"></div>
              <div class="colorlib-table-cell js-fullheight">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    @foreach ($profil as $data)
                    <h1 class="mb-4"><a href="index.php" class="logo"><?php echo $data->nama_lengkap?></a></h1>
                    @endforeach
                    <ul>
                      <li><a href="/"><span><small>01</small>Home</span></a></li>
                      <li><a href="/resume"><span><small>02</small>Resume</span></a></li>
                      <li><a href="/portfolio"><span><small>03</small>Portfolio</span></a></li>
                      <li class="active"><a href="/contact"><span><small>04</small>Contact</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
    
    <div id="colorlib-page">
        <header>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="colorlib-navbar-brand">
                    @foreach ($profil as $data)
                    <a class="colorlib-logo" href="/"><span class="logo-img" style="background-image: url(/images/fotogoni2.jpg);"></span><?php echo $data->nama ?></a>
                    @endforeach
                  </div>
                  <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                </div>
              </div>
            </div>
          </header>

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            @foreach ($profil as $data)
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Location:</span> <?php echo $data->lokasi ?></p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href=""><?php echo $data->no_hp ?></a></p>
            </div>
            <div class="col-md-6">
              <p><span>Email:</span> <a href="mailto:<?php echo $data->email ?>"><?php echo $data->email ?></a></p>
            </div>
          </div>
        </div>
      </section>
      
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="instagram.com/alghanyj"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact Me</h2>
                <p class="h3 email"><a href="mailto:<?php echo $data->email ?>"><?php echo $data->email ?></a></p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>