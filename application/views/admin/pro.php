<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ebunga</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?= base_url() ?>assets2/images/logo3.png" style="height: 300px; width: 200px;">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="<?= base_url() ?>assets2/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="<?= base_url() ?>assets2/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?= base_url() ?>assets2/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets2/inc/TimeCircles.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets2/inc/TimeCircles.css" />
 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   	
  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				     <!--  <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> Kindle</a> -->

				      <!-- Image Logo -->
				     <a class="navbar-brand" href="index.html"><img src="<?= base_url() ?>assets2/images/ebunga.png" style="height: 70.5px; width: 57.5px; margin-bottom: 9px;"></a>


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#mu-book-overview">OVERVIEW</a></li>
					       <!--  <li><a href="#mu-author">AUTHOR</a></li> -->
				            <li><a href="#mu-pricing">PRICE</a></li>
				            <li><a href="#mu-testimonials">TESTIMONIALS</a></li>
				            <li><a href="#mu-contact">CONTACT</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-hero" style="">
		<div class="container">
			<div class="row">

				<?php foreach ($promo as $data) {
					# code...
				} ?>

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="<?= base_url() ?>assets/gambar_promo/<?= $data['foto'] ?>" alt="">
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left" >
						<h1><?= $data['judul'] ?></h1>
						<p><?= $data['sub_judul'] ?></p>
						<a href="https://www.ebunga.com/user/register.html" target="_blank" class="mu-primary-btn">
							Sign up now</a>
						<!-- <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span> -->
					</div>
				</div>	

			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	
	<!-- Start main content -->
		
	<main role="main">

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">
									<!-- <div class="col-md-2 col-sm-6">
										
									</div> -->
									<!-- Start Single Counter -->
									<div class="col-md-12 col-xl-6">
										<div class="mu-single-counter" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
										<div style="">
											<h3 style="margin-top: 20px;">Remaining Promo Time</h3>
								          		<span class="mu-header-dot"></span>
								            <div id="DateCountdown" data-date="<?= $data['end_promo'] ?> 00:00:00"></div>
								         </div>
										</div>
									</div>

									<!-- <div class="col-md-2 col-sm-12">
										
									</div> -->
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start Book Overview -->
		<section id="mu-book-overview" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Product Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<?php foreach ($product as $data) { ?>

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<img src="<?= base_url() ?>assets/gambar_galery/<?= $data['gambar'] ?>" class="img-fluid" alt="Image">
											</span>
											<h4><?= $data['nama_product'] ?></h4>
											<p><?= $data['keterangan'] ?></p>
										</div>
									</div>

								<?php } ?>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									
									<!-- / Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->

		

		<!-- Start Video Review -->
		<section id="mu-video-review" style="background-image: url(<?= base_url() ?>assets2/images/bg-bunga.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Check Out Our Video Review</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Video Review Content -->
							
							<div class="mu-video-review-content">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/FBU-qweFF4g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
							</center>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Author -->
		<!-- <section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">
 -->
							<!-- <div class="mu-heading-area">
								<h2 class="mu-heading-title">About The Author</h2>
								<span class="mu-header-dot"></span>
							</div> -->

							<!-- Start Author Content -->
							<!-- <div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-image">
											<img src="assets/images/author.jpg" alt="Author Image">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mu-author-info">
											<h3>John Doe</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit facilis ipsum ullam reiciendis odio error iste neque ratione libero rem accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda, consectetur.</p>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, dolorem error neque! Dolores similique ut iusto odit esse ipsam, nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum deleniti perspiciatis!</p>
											<img class="mu-author-sign" src="assets/images/author-signature.png" alt="Author Signature">

											<div class="mu-author-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div> -->
							<!-- End Author Content -->
<!-- 
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Author -->

		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Our Pricing Plans</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">

									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-6">
										 <div class="mu-pricing-single" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

											<div class="mu-pricing-single-head">
												<h4>ECONOMIC</h4>
												<p class="mu-price-tag">
													<h3>IDR 100.000 ~ 1.000.000</h3>
												</p>
											</div>

											<div class="">
												<img src="<?= base_url() ?>assets2/images/eco.png" alt="..." class="" style="height: 300px;">
											</div>

											<div class="mu-pricing-single-footer">
												<a href="https://www.ebunga.com/" class="mu-order-btn" target="_blank">Order Now!</a>
											</div>

										</div>
									</div>
									<!-- / Pricing Single Content -->

									<!-- Pricing Single Content -->
									<!-- <div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single mu-popular-price-tag">


											<div class="mu-pricing-single-head">
												<h4>PROFESSIONAL PLAN</h4>
												<p class="mu-price-tag">
													<span>$</span> 25
												</p>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
												<li> Lorem ipsum dolor sit amet. </li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="https://www.ebunga.com/" class="mu-order-btn" target="_blank">Order Now!</a>
											</div>
											

										</div>
									</div> -->
									<!-- / Pricing Single Content -->

									<!-- Pricing Single Content -->
									<div class="col-sm-6 col-md-6">
									 <div class="mu-pricing-single " style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">


											<div class="mu-pricing-single-head">
												<h4>PREMIUM</h4>
												<p class="mu-price-tag">
													<h3>IDR 1.000.000 ~ Above</h3>
												</p>
											</div>

											<div class="">
												<img src="<?= base_url() ?>assets2/images/und.png" alt="..." class="" style="height: 300px;">
											</div>

											<div class="mu-pricing-single-footer">
												<a href="https://www.ebunga.com/" class="mu-order-btn" target="_blank">Order Now!</a>
											</div>
											
											
										</div>
									</div>
									<!-- / Pricing Single Content -->


								</div>
							</div>
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

		<!-- Start Testimonials -->
		<section id="mu-testimonials" style="background-image: url(<?= base_url() ?>assets2/images/bg-bunga1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">What Our Customers Say</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<?php foreach ($testimoni as $data) { ?>

									<li>
										<p>"<?= $data['ket_testimonial'] ?>"</p>
										<img class="mu-rt-img" src="<?= base_url() ?>assets/gambar_testimoni/<?= $data['foto'] ?>" alt="img">
										<h5 class="mu-rt-name">~ <?= $data['nama_user'] ?> ~</h5>
										
									</li>

								<?php } ?>

									
								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->

	
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Drop Us A Message</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div id="form-messages"></div>
								<!-- <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form"> -->
									<form method="post" action="<?= base_url() ?>Promo_ebunga/add_pesan" class="mu-contact-form">
									<div class="form-group">                
										<input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
									</div>

									<div class="form-group">                
										<input type="number" class="form-control" placeholder="Enter number phone" id="phone" name="phone" required>
									</div>  
									<div class="form-group">                
										<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
									</div>              
									<div class="form-group">
										<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
									</div>

									<input type="submit" name="kirim" value="SUBMIT" class="mu-send-msg-btn">
									
						        </form>

							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Start Google Map -->
		<section id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.8357592517264!2d98.69582144273261!3d3.629044874562542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031322e4b729385%3A0xac458639382f0c39!2sTiki%20Gerai%2056%20Cemara!5e0!3m2!1sid!2sid!4v1612251591516!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</section>

			
		<!-- End Google Map -->

	</main>

	<script>
            $("#DateCountdown").TimeCircles();
          
     </script>      
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
					<!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">www.ebunga.com</a>. All right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	  <script src="<?php echo base_url() ?>assets/alert.js"></script>
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets2/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="<?= base_url() ?>assets2/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="<?= base_url() ?>assets2/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="<?= base_url() ?>assets2/js/app.js"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="<?= base_url() ?>assets2/js/custom.js"></script>
	
	<script>
            $("#DateCountdown").TimeCircles();
          
     </script>

   

    
  </body>
</html>