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
 
    <link rel="stylesheet" href="<?php echo $url; ?>css/animate.css">
    
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
					<a class="navbar-brand" href="<?php echo $url; ?>index.php"><img src="img/logo.png" style="width: auto; height: 3em;"></a>
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
	        	<li class="nav-item active"><a href="<?php echo $url; ?>about.php" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="<?php echo $url; ?>team.php" class="nav-link">Nuestro equipo</a></li>
				<li class="nav-item"><a href="<?php echo $url; ?>project.php" class="nav-link">Tienda</a></li>
				<li class="nav-item"><a href="<?php echo $url; ?>servicios.php" class="nav-link">Servicios</a></li>
	        	<li class="nav-item"><a href="<?php echo $url; ?>blog.php" class="nav-link">Blog</a></li>
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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Nosotros <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Nosotros</h1>
          </div>
        </div>
      </div>
    </section>
	  
	<section class="ftco-section">
    	<div class="container">
    		<div class="row" >
    			<div class="col-md-12">
    				<h2 class="mb-4">Nuestra Historia</h2>	<p style="text-align: justify;">
						Electro Industrial Céspedes, es una empresa con 20 años de experiencia en la comercialización de materiales y
						servicios aplicados a la electricidad dirigidos al sector de media y baja tensión. Fue constituida por el Sr. Céspedes
						Quispe Ore en el 2000. Él es un técnico electricista con el sueño de ser un exitoso emprendedor; por ello; comenzó en
						un local de 2 X 3 mts. Desde ese entonces, tuvo mucho apoyo y acogida por el público. Ante esta necesidad se
						requería más empleados y materiales; entonces, desde el año 2005 con el nuevo integrante de la empresa, Sra. Enma
						Isidro Huamán, se trabajó en la necesidad de cubrir la productividad de nuestros clientes con nuestro servicios eficaz
						y ventas de materiales al instante. El 2019 se dejó el S.R.L. para formar una empresa familiar S.A.C. . A Partir de ahora
						el crecimiento, las mejoras y el posicionamiento es para el beneficio de ustedes como un cliente fidelizado y de la
						identidad de Corporación Electro Industrial Céspedes. </p>
    			</div>
    		
    		</div>
    	</div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(<?php echo $url; ?>img/logo-C.png);">
    					<a href="javascript: void(0)" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate pl-md-4 py-md-4">
		          	<span class="subheading">Bienvenido a Electro Industrial Cespedes</span>
		            <h2 class="mb-4">Conoce un poco de Nosotros</h2>
		        
		           <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">nuestra Misión</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Nuestra Visión</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Nuestros Valores</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Brindar solución proactiva a tus necesidades con el servicio personalizado para tu desempeño productivo en el
											sector en media y baja tensión</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Convertirse en una empresa posicionada y líder en ventas y servicios del rubro eléctrico de media y baja tensión a través de
											la fidelización a nivel regional</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
										<center>
									  	<p> Responsabilidad</p>
										  <p>Confiabilidad</p>
										  <p>	Empatía</p></center>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
	<!--<section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
					<div class="col-md-6  d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex"> 
              <div class="text-2">
              	<span>SERVICIOS</span>
              </div>
            </div>
          </div>
         
          <div class="col-md-6  d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text-2">
              	<span>CATEGORIZADOS</span>
              </div>
            </div>
          </div>
     
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
		  <div class="container-fluid px-md-0">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-5.jpg);">
            	<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-6.jpg);">
            	<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Building</span>
	              	<h2><a href="work-single.php">College Health Profession</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
		</section>-->

    <section class="ftco-section testimony-section bg-primary">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    				<h5 class="font-weight-bold">Home Builder</h5>
    				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
    				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    			</div>
    			<div class="col-md-4">
    				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt mb-5">
      <div class="container">
      	<div class="row">
	      	<div class="col-md-12">
	      		<div class="bg-primary w-100 rounded px-md-0 px-4">
			        <div class="row d-flex justify-content-center">
			        	<div class="col-lg-8 py-4">
			        		<div class="row">
					          <div class="col-md-6 d-flex align-items-center">
					            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
					          </div>
					          <div class="col-md-6 d-flex align-items-center">
					            <form action="#" class="subscribe-form">
					              <div class="form-group d-flex">
					                <input type="text" class="form-control" placeholder="Enter email address">
					                <input type="submit" value="Subscribe" class="submit px-3">
					              </div>
					            </form>
					          </div>
				          </div>
			          </div>
			        </div>
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