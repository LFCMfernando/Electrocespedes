<?php
require_once "rutas.php";
$url= Ruta::ctrRuta();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Builder - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="<?php echo $url; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $url; ?>css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo $url; ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/style.css">
    
            <!-- ICONO LOGO -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $url; ?>icono/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url; ?>icono/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url; ?>icono/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url; ?>icono/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url; ?>icono/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url; ?>icono/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $url; ?>icono/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url; ?>icono/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url; ?>icono/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $url; ?>icono/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url; ?>icono/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $url; ?>icono/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url; ?>icono/favicon-16x16.png">

  </head>
  <body>

    <div class="container pt-5">
			<div class="row justify-content-between">
				<div class="col">
          <a class="navbar-brand" href="<?php echo $url; ?>index.php"><img src="<?php echo $url; ?>img/logo.png" style="width: auto; height: 3em;"></a>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="<?php echo $url; ?>index.php" class="nav-link">Inicio</a></li>
	        	<li class="nav-item"><a href="<?php echo $url; ?>about.php" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="<?php echo $url; ?>team.php" class="nav-link">Nuestro equipo</a></li>
            <li class="nav-item"><a href="<?php echo $url; ?>project.php" class="nav-link">Tienda</a></li>
            <li class="nav-item"><a href="<?php echo $url; ?>servicios.php" class="nav-link">Servicios</a></li>
	        	<li class="nav-item active"><a href="<?php echo $url; ?>blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?php echo $url; ?>contact.php" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $url; ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </section>
   	
		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_1.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_2.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_3.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_4.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_5.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('<?php echo $url; ?>images/image_6.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">About us</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<ul class="ftco-footer-social p-0">
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
		            </ul>
							</div>
							<div class="col-md-8">
								<div class="row justify-content-center">
									<div class="col-md-12 col-lg-10">
										<div class="row">
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Services</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Construction</a></li>
						              <li><a href="#" class="py-1 d-block">House Renovation</a></li>
						              <li><a href="#" class="py-1 d-block">Painting</a></li>
						              <li><a href="#" class="py-1 d-block">Arhictecture Design</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">About</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Staff</a></li>
						              <li><a href="#" class="py-1 d-block">Team</a></li>
						              <li><a href="#" class="py-1 d-block">Careers</a></li>
						              <li><a href="#" class="py-1 d-block">Blog</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Resources</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Security</a></li>
						              <li><a href="#" class="py-1 d-block">Global</a></li>
						              <li><a href="#" class="py-1 d-block">Charts</a></li>
						              <li><a href="#" class="py-1 d-block">Privacy</a></li>
						            </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
								<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Request A Quote</h2>
						<form action="#" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
              	<button type="submit" class="form-control submit px-3">Send</button>
              </div>
            </form>
					</div>
				</div>
			</div>
		</footer>
    
  
    <a id="app-whatsapp" class="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=999999999&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
			<img src="img/whatsapp.png" alt="whatsapp" >
		</a>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo $url; ?>js/jquery.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo $url; ?>js/popper.min.js"></script>
  <script src="<?php echo $url; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo $url; ?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $url; ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo $url; ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $url; ?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo $url; ?>js/google-map.js"></script>
  <script src="<?php echo $url; ?>js/main.js"></script>
    
  </body>
</html>