<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kuliner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dashboard')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('dashboard')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('dashboard')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('dashboard')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('dashboard')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{asset('dashboard')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">AD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="/tour" class="nav-link">Kuliner</a></li>
          <li class="nav-item"><a href="/hotel" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="/tiket" class="nav-link">Tiket</a></li>
          <li class="nav-item"><a href="" class="nav-link">Grafik</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="/login" class="nav-link"><span>Sig In</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('dashboard')}}/images/culinary.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kuliner</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		{{-- <div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Destination, City">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select Location</option>
	                      <option value="">San Francisco USA</option>
	                      <option value="">Berlin Germany</option>
	                      <option value="">Lodon United Kingdom</option>
	                      <option value="">Paris Italy</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              {{-- </div> --}}
		              {{-- <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5"> --}}
		              </div>
		            </div>
	            </form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
          		<div class="col-md-5 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('dashboard')}}/images/ikan.jpg);">
                                    <img src="ikan.jpg">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Ikan Bakar 2 Putri</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">Rp.25000</span>
		    							</div>
		    						</div>
		    						<p>Disini tersedia berbagai macam ikan laut </p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Warung Ibu Fatimah</span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    	<div class="col-md-5 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('dashboard')}}/images/ikan.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Ikan Bakar Farel</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">Rp.30000</span>
		    							</div>
		    						</div>
		    						<p>Menjual Ikan dengan berbagai bumbu masakan</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Warung Farel</span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-5 ftco-animate">
		    				<div class="destination">
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('dashboard')}}/images/ikan.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Ikan Bakar Bu Tejo</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$20000</span>
		    							</div>
		    						</div>
		    						<p>selain ikan bakar menjual makan laut lainya</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Warung Bu Tejo</span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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


  <script src="{{asset('dashboard')}}/js/jquery.min.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('dashboard')}}/js/popper.min.js"></script>
  <script src="{{asset('dashboard')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('dashboard')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('dashboard')}}/js/aos.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('dashboard')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('dashboard')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('dashboard')}}/js/scrollax.min.js"></script>
  <script src="{{asset('dashboard')}}/js/range.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('dashboard')}}/js/google-map.js"></script>
  <script src="{{asset('dashboard')}}/js/main.js"></script>

  </body>
</html>
