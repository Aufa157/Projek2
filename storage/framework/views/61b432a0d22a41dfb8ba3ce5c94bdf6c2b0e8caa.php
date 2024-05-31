<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/animate.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">AD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/tour" class="nav-link">Kuliner</a></li>
          <li class="nav-item"><a href="/hotel" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="/tiket" class="nav-link">Tiket</a></li>
          <li class="nav-item"><a href="" class="nav-link">Grafik</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="" class="nav-link"><span>Akun</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo e(asset('dashboard')); ?>/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Pantai <br></strong> Pondok Bali</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nikmati indahnya salah satu destinasi wisata pantai di kota Subang</p>
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="Ex: food, service, hotel">
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="/tour"><i class="flaticon-fork"></i>Kuliner</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="/hotel"><i class="flaticon-hotel"></i>Hotel</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="/tiket"><img src="<?php echo e(asset('dashboard')); ?>/images/tiket.png">Tiket</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="/grafik"><img src="<?php echo e(asset('dashboard')); ?>/images/grafik.png">Grafik</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Travellers Love Us</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Our Dedicated Support</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Location</h2>
				<p>Pantai Pondok Bali</p>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Information</h2>
				<p> Berikut adalah list beberapa kuliner yang ada di sekitar pantai,jika anda lapar silahkan kunjungi warung terdekat </p>
				<ul class="list-unstyled">
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Have a Questions?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
					  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
					  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website Pantai Pondok Bali  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">PT AUDAP</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
		</div>
	  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/popper.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/aos.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/google-map.js"></script>
  <script src="<?php echo e(asset('dashboard')); ?>/js/main.js"></script>



  </body>
</html>
<?php /**PATH C:\xampp\htdocs\projek2\resources\views/v_mainpage.blade.php ENDPATH**/ ?>