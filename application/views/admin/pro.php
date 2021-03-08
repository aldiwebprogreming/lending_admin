<?php 

	$ip  = $this->input->ip_address(); // Mendapatkan IP user

	$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
	$waktu = time(); //\
	$timeinsert = date("Y-m-d H:i:s");

	// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
$s = $this->db->query("SELECT * FROM tbl_visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
$ss = isset($s)?($s):0;

//kalau belum ada simpan data ip
if($ss == 0){
$this->db->query("INSERT INTO tbl_visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
}

// Jika sudah ada, update
else{
$this->db->query("UPDATE tbl_visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
}
		
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ebunga | promo</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?= base_url() ?>assets2/images/ebunga11.png" style="height: 200px; width: 100px;">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="<?= base_url() ?>assets2/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="<?= base_url() ?>assets2/css/theme-color/default-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/color.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/style.css">

    <!-- Main Style -->
    <link href="<?= base_url() ?>assets2/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/css/app.css?v=1.0">
    <link rel="stylesheet" href="/assets/css/app.css?v=1.1">
    <!-- Open Sans for body font -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">

    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets2/inc/TimeCircles.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets2/inc/TimeCircles.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets2/header.css" />

    <script type="text/javascript" src="<?= base_url() ?>assets3/dist/wow.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
 
  <link type="text/css" href="<?= base_url() ?>countdown/jquery.countdown.css" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>countdown/jquery.countdown.min.js"></script>


<!-- Swiper || slider halaman home -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>slide/style.css">
  <!-- Swiper || slider halaman home -->


 <!-- aksi untuk ganti warna header saat di scroll -->
    <script type="text/javascript">
    	$(window).on('scroll',function(){
    		if($(window).scrollTop()){
    			$('header').addClass('black');
    		}else{
    			$("header").removeClass('black');
    		}
    	})
    </script>
    <!-- aksi untuk ganti warna header saat di scroll -->

  </head>

<!-- aksi untuk tampilan mobil di section cerita produk -->
  <style>

/*@media only screen and (max-width: 700px) {
  #media, #media1{
  	display: none;
  }
}*/


</style>



<!-- aksi untuk tampilan mobil di section cerita produk -->

  <body>
  	<!-- Start Header -->
	<header id="mu-header" role="banner" style="position: fixed;">
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
				     <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets2/images/ebunga.png" style="height: 70.5px; width: 57.5px; margin-bottom: 9px;"></a>


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#mu-book-overview">PRODUCT</a></li>
					       <!--  <li><a href="#mu-author">AUTHOR</a></li> -->
				            <li><a href="#mu-pricing">PRICE</a></li>
				            <li><a href="#mu-testimonials">TESTIMONIALS</a></li>
				            <li><a href="#mu-contact">MESSAGE</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->
	<?php 
		$null = $this->db->get('tbl_promo')->num_rows();
		if ($null == null) {
			$num_promo = FALSE;
			$promo = 0;
		}
	 ?>
	<!-- Start Featured Slider -->
<?php if ($num_promo == FALSE OR $promo == 0) { ?>
	<section id="mu-hero" style=" background-color: #9500FF;">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6 animate__animated animate__fadeInRight">
					<div class="mu-hero-right">
						<img src="<?= base_url() ?>assets3/img/default.jpg" alt="" style="border-radius: 3%;">
					</div>
				</div>
				
								<div class="col-md-6 col-sm-6 col-sm-pull-6">
									<div class="mu-hero-left" style="margin-top: 20px; margin-left: 15px;">
										<h1 class="animate__animated animate__fadeInLeft" style="color: #fff;">Selamat Datang !</h1>
										<p class="animate__animated animate__fadeInLeft" style="font-size: 20px;">Ebunga memudahkan untuk memberi bingkisan ucapan kepada teman, keluarga, dan kenalan dimana saja, diseluruh Indonesia tanpa perlu bayar ongkos kirim, ebunga ada disetiap Kabupaten/Kota di Indonesia yang siap mengantarkan ketempat tujuan pemberian.</p>
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

							

						</div>
					</div>
				</div>
			</div>
		</section>

<?php } else{ ?>



	<section id="mu-hero" style="">
		<div class="container">
			<div class="row">

				<?php foreach ($num_promo as $data) {
					# code...
				} ?>

					<div class="swiper-container">
					    <div class="swiper-wrapper">

					    	<!-- slid pertama -->
					      <div class="swiper-slide">
					      	<div class="row">
								<div class="col-md-6 col-sm-6 col-sm-push-6 animate__animated animate__fadeInRight">
									<div class="mu-hero-right">
										<img src="<?= base_url() ?>assets3/img/default.jpg" alt="" style="border-radius: 3%;">
									</div>
								</div>
				
								<div class="col-md-6 col-sm-6 col-sm-pull-6">
									<div class="mu-hero-left" style="margin-top: 20px; margin-left: 15px;">
										<h2 class="animate__animated animate__fadeInLeft" style="color: #fff;">Selamat Datang !</h2>
										<p class="animate__animated animate__fadeInLeft" style="font-size: 20px;">Ebunga memudahkan untuk memberi bingkisan ucapan kepada teman, keluarga, dan kenalan dimana saja, diseluruh Indonesia tanpa perlu bayar ongkos kirim, ebunga ada disetiap Kabupaten/Kota di Indonesia yang siap mengantarkan ketempat tujuan pemberian.</p>
										<a href="https://www.ebunga.com/user/register.html" target="_blank" class="mu-primary-btn">
											Sign up now</a>
										<!-- <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span> -->
									</div>
								</div>	

								</div>
							</div>
							<!-- slid pertama -->

							<!-- slid kedua -->
					      <div class="swiper-slide">
					      	<div class="row">

								<?php foreach ($num_promo as $data) {
									# code...
								} ?>

								<div class="col-md-6 col-sm-6 col-sm-push-6">
									<div class="mu-hero-right animate__animated animate__fadeInRight">
										<img src="<?= base_url() ?>assets/gambar_promo/<?= $data['foto'] ?>" alt="" style="border-radius: 3%;">
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6 col-sm-pull-6">
									<div class="mu-hero-left" style="margin-top: 20px; margin-left: 15px;">
										<h1 class="animate__animated animate__fadeInLeft"><?= $data['judul'] ?></h1>
										<p class="animate__animated animate__fadeInLeft" style="font-size: 20px;"><?= $data['sub_judul'] ?></p>
										<a href="https://www.ebunga.com/user/register.html" target="_blank" class="mu-primary-btn">
											Sign up now</a>
										<!-- <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span> -->
									</div>
								</div>	

							</div>
					      </div>

					      <!-- slid kedua -->
					    
					    </div>
					    <!-- Add Arrows -->
					    <!-- <br>
					    <br><br>
					     <div class="swiper-pagination"></div> -->
					      <div class="swiper-button-next" style="color: black;"></div>
					    
    					<div class="swiper-button-prev" style="color: black;"></div>
					  </div>
				
				

			</div>
		</div>
	</section>

	<script>
		var end_promo = <?= $data['end_promo'] ?>;
	</script>
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
								          		<span class="mu-header-dot" style="background-color: orange;"></span>
								            <!-- <div id="DateCountdown" data-date="2021-03-31 00:00:00"> -->
								            	<center>
								            	<ul id="example" class="<?= $data['end_promo'] ?>">
												    <li><span class="days">00</span><p class="days_text">Days</p></li>
												    <li class="seperator">:</li>
												    <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
												    <li class="seperator">:</li>
												    <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
												    <li class="seperator">:</li>
												    <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
											  </ul>
								            	</center>
								           <!--  </div>  -->
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

			<?php } ?>

			
			<section class="">
				<div class="container">
					<br>
			<br>
					<div class="row">
						<h2 style="text-align: center; margin-bottom: 20px;">Kemudahan Itu Adalah Hak Setiap Individual !!!</h2>
						<center>
						<span class="mu-header-dot" style="background-color: orange;"></span>
						</center>
						<br>

						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 20px; color: #9500FF;;">Mudahnya Pesan Hadiah</h4>
								<img src="<?= base_url() ?>assets/logo/1.png" class="img-fluid" alt="Image" style="">
								<p style="text-align: center; font-size: 20px; color:#333333">Hanya dengan sentuhan jari, bingkisan di momen yang kamu butuhkan bisa di dapatkan dengan mudah.</p>
					    	</span>

						</div>

						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 22px; color: #590FFF;">Kualitas Produk Terjamin</h4>
								<center>
								<img src="<?= base_url() ?>assets/logo/2.png" class="img-fluid" alt="Image">
								</center>
								<p style="text-align: center; font-size: 20px; color:#333333 ">Kami menyediakan produk dengan kualitas terjamin, karena kepuasan kamu menjadi prioritas utama kami.</p>
					    	</span>

						</div>

						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 20px; color:#590FFF;">Kemudahan Pembayaran</h4>
								<img src="<?= base_url() ?>assets/logo/3.png" class="img-fluid" alt="Image">
								<br>
								<p style="text-align: center; font-size: 20px; color:#333333">Kamu bebas memilih berbagai metode pembayaran yang prosesnya cepat, sederhana, dan aman.</p>
					    	</span>

						</div>
						
					</div>
				</div>
				
			</section>

			<section id="mu-video-review" style="background-image: url(<?= base_url() ?>assets2/images/bg-bunga.jpg); background-color: #9500FF;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area" style="padding: 90px;">

							<div class="mu-heading-area" style="padding: 10px;">
								<h1 class="mu-heading-title" style="">Dapat Undangan Diluar Kota, Tidak Bisa Hadir ?</h1>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<p style="font-size: 20px; ">Kamu pernah mengalami seperti itu, tonton video dibawah ini.</p>
							

							<!-- Start Video Review Content -->
						
							<div class="mu-video-review-content">
								<div class="embed-responsive embed-responsive-16by9">
									<?php 
									$video1 = $this->db->get_where('tbl_video_review',array('section' => 'section 1' ))->result_array();

									foreach ($video1 as $video) {
										echo $video['frame'];
									}
								
									 ?>
								</div>
								
							</div>
						</div>
						</div>
							
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>


									<!-- <div class="col-md-2 col-sm-12">
										
									</div> -->
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									
									<!-- / Single Counter -->

		<!-- End Counter -->

		<!-- Start Book Overview -->
		<section id="mu-book-overview" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Produk Ebunga</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<p style="font-size: 20px;">Mau kirim kemana ? ebunga semua bisa.</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

								<div class="col-md-12">

									<center>
										<!-- 
										<button class="mu-order-btn" id="bunga" style="margin-bottom: 20px;"><i class="fas fa-fan"></i> Bunga</button>
										<button class="mu-order-btn" id="papan" style="margin-bottom: 20px;"><i class="fas fa-border-all"></i> Papan Bunga</button>
										<button class="mu-order-btn" id="cake" style="margin-bottom: 20px;"><i class="fas fa-birthday-cake"></i> Cake</button>
										<button class="mu-order-btn" id="parcel" style="margin-bottom: 20px;"><i class="fas fa-fan"></i> Parcel</button>
 -->

										
								<div id="bungaku" class="owl-carousel owl-theme">
									<?php foreach ($product as $data) { ?>
		
								    <div id="slid_bunga" class="item slid_bunga">
								    	<span class="mu-book-overview-icon-box">
								    		<span class="btn btn-primary" style="position: absolute; right: 15px; bottom: 180px; border-radius: 5%; background-color: #590FFF;"><b>SALE <?= $data['diskon'] ?>%</b></span>
								    	<img src="<?= base_url() ?>assets/gambar_galery/<?= $data['gambar'] ?>" class="img-fluid" alt="Image">
								    	</span>
								    	<h4><?= $data['nama_product'] ?></h4>
								    	<h7><strike>Rp.<?=  number_format($data['harga'],2,",",".") ?></strike></h7>
								    	<h6>Rp.<?=  number_format($data['harga_diskon'],2,",",".") ?></h6>
										<p><?= $data['keterangan'] ?></p>

										<?php 

											$bilangan = $data['id'];
											$hasil = $bilangan % 2;
											if ($hasil == 0) { ?>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
									<?php } else { ?>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: #FFD700;"></i>
										<i class="fas fa-star" style="color: silver;"></i>
									<?php } ?>

								    </div>
								<?php } ?>
								    
								</div>
								<br>
								<p style="font-size: 20px; margin-top 50px;">Di ebunga kamu bisa memilih produk mulai dari papan bunga, kue ulang tahun, buket bunga, buket uang hingga parcel yang bisa dicustom sesuai dengann moment acaranya.</p>
								
								</center>
							</div>

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
		<section id="mu-video-review" style="background-image: url(<?= base_url() ?>assets2/images/bg-bunga.jpg); background-color: #9500FF;">
			<div class="container">
				<div class="row" style="">
					<div class="col-md-12">
						<div class="mu-video-review-area" style="padding: 90px;">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">Terobosan Terbaru Cuma Diebunga</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<p style="font-size: 20px;">Satu-satunya platform ecommerse 100% karya anak bangsa yang luar biasa memiliki jaringan yang luas sehingga dapat menjangkau kota-kota di seluruh Indonesia.</p>
							

							<!-- Start Video Review Content -->
						
							<div class="mu-video-review-content">
								<div class="embed-responsive embed-responsive-16by9">
								
									<?php 


									$video2 = $this->db->get_where('tbl_video_review',array('section' => 'section 2' ))->result_array();

									foreach ($video2 as $videoo) {
										echo $videoo['frame'];
									}
								
									 ?>
								</div>
								
							</div>
						</div>
						</div>
							
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
								<h2 class="mu-heading-title ">Perbedaan Papan Bunga Sistem Sewa dan Jual</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p> -->
							</div>

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
								<div class="row">

									<!-- Pricing Single Content -->
									<div class="col-sm-4 col-md-4 ">
										 <img src="<?= base_url() ?>assets2/images/1.png"  class="rounded float-left">
									</div>

									<!-- --------------------------- -->

									<div class="col-sm-8 col-md-8 ">
										<h4>Papan Bunga Sistem Rental / Sewa</h4>
										<p style="text-align: left; font-size: 20px;">Papan bunga akan di ambil kembali oleh seller setelah acaranya selesai. Durasi penyewaan rata-rata 1 - 3 hari. Bahan yang digunakan untuk pembuatan papan bunga ini terbuat dari Bahan busa, kain baldu, kayu, dan bunga suyok.
										Papan bunga sewa biasanya terdapat di kota Medan, Binjai, Pematang Siantar, Padang, Samosir, Tanjung Balai, Bukittinggi, Asahan, dll.
									</p>

									</div>
								</div>


								
									<div class="col-sm-4 col-md-4" id="media0" style="display: none">
										 <img src="<?= base_url() ?>assets2/images/2.png"  class="rounded float-left">
									</div>

									<div class="col-sm-8 col-md-8" id="media" style="margin-top: 50px;">
										<h4>Papan Bunga Sistem Jual</h4>
										<p style="text-align: left; font-size: 20px;">Papan bunga dijual lepas dan tidak diambil kembali. Bahan Papan Biasanya terbuat dari Styrofoam, bunga segar, dan bunga artificial. 
										Papan bunga yang dijual lepas biasanya terdapat di kota Jakarta, Bekasi, Bandung, Surabaya, Denpasar, Kota Baru Kalsel, dll.
										  </p>
									</div>
								

									<div class="col-sm-4 col-md-4" id="media1">
										 <img src="<?= base_url() ?>assets2/images/2.png"  class="rounded float-left">
									</div>



									<div class="col-sm-4 col-md-4 ">
										 <img src="<?= base_url() ?>assets2/images/3.png"  class="rounded float-left">
									</div>

									<div class="col-sm-8 col-md-8 " style="margin-top: 50px;">
										<h4>Papan Bunga Digital</h4>
										<p style="text-align: left; font-size: 20px;">Papan bunga digital menggunakan bahan spanduk / baliho, dan bunga. Sistem papan bunga ini juga menggunakan sistem jual. Papan bunga ini biasanya terdapat di kota Denpasar, Kota Baru Kalsel, dll. </p>
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
									
									<!-- / Pricing Single Content -->


								</div>
							
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="mu-video-review" style="background-image: url(<?= base_url() ?>assets2/images/bg-bunga.jpg); background-color: #9500FF;">
			<div class="container">
				<div class="row" style="">
					<div class="col-md-12">
						<div class="mu-video-review-area" style="padding: 90px;">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">Mitra Eksklusif Ebunga</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<p style="font-size: 20px;">Kamu adalah prioritas kami, ebunga hanya bekerja sama dengan pengerajinan yang berpengalaman disetiap kelurahan di kota/kabupaten untuk memastikan pengiriman bingkisan aman dan tepat waktu.</p>
							

							<!-- Start Video Review Content -->
							<p style="font-size: 30px;">Gak percaya ?</p>
							<p style="font-size: 20px;">Tonton video berikut ini sampai habis.</p>
						
							<div class="mu-video-review-content">
								<div class="embed-responsive embed-responsive-16by9">
								
									<iframe width="560" height="315" src="https://www.youtube.com/embed/po5l2dQTqNo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								
							</div>
						</div>
						</div>
							
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>



		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">TUNGGU DULU !!!! <br>Selain Mendapatkan Kemudahannya, dapatkan Juga 3 Keuntungan Ini.</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p> -->
							</div>

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content" style="margin-top: 15px;">
								<div class="row">

		
						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 20px; color: #9500FF;">Ecash Reward</h4>
								<center>
								<img src="<?= base_url() ?>assets/logo/card/ecas.png" class="img-fluid" alt="Image" style="margin-bottom: 30px;">
								</center>
								<p style="text-align: center; font-size: 20px; color:#333333">Kamu akan langsung mendapatkan ecash 5000 tanpa syarat yang bisa langsung dipakai untuk berintraski diebunga. Tanpa syarat dan tanpa batas.</p>
					    	</span>

						</div>

						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 20px; color: #590FFF;">Cashback Reward</h4>
								<center>
								<img src="<?= base_url() ?>assets/logo/card/bek.png" class="img-fluid" alt="Image">
								</center>
								<p style="text-align: center; font-size: 20px; color:#333333 ">Setiap melakukan transaksi, kamu akan mendapatkna Cashback 5% dari nilai transaksi dalam bentuk ecash dan dapat dipakai untuk transaksi berikutnya.</p>
					    	</span>

						</div>

						<div class="col-sm-4 col-md-4">

							<span class="mu-book-overview-icon-box" style="margin-top: 15px; border: 2px solid #590FFF;">
								<h3 style="text-align: center; margin-top: 20px; color:#590FFF;">Gratis Ongkir</h4>
								<center>
								<img src="<?= base_url() ?>assets/logo/card/free.png" class="img-fluid" alt="Image">
								</center>
								<p style="text-align: center; font-size: 20px; color:#333333">Kami siap mengantarkan pesanan kamu kemana saja tanpa biaya pengiriman sedikitpun yang bisa kamu manfaatkan kapan saja  dan selamanya.</p>
					    	</span>

						</div>
						
					</div>
				</div>
									
								</div>
							
							

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
						<div class="mu-testimonials-area" style="padding:90px;">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">Lebih Dari 1000 Orang Telah Merasakan Inovasi Terbaru Diebunga</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<?php foreach ($testimoni as $data) { ?>

									<li>
										<!-- <p>"<?= $data['ket_testimonial'] ?>"</p> -->

										<center>
										<img class="img-fluid" src="<?= base_url() ?>assets/gambar_testimoni/<?= $data['foto'] ?>" alt="img" style="height: 400px;">
										</center>


										<!-- <h5 class="mu-rt-name">~ <?= $data['nama_user'] ?> ~</h5> -->
										
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

		<section id="mu-pricing" style="background-color: silver">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">Pertanyaan</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p> -->
							</div>
							

							<!-- Start Pricing Content -->
							<div class="mu-pricing-content">
							<center>
							<button id="pertanyaan" class="mu-send-msg-btn" style="margin-bottom: 60px;">Pertanyaan </button>
							<!-- <button id="jawaban" class="mu-send-msg-btn" style="margin-bottom: 20px; display: none;">Jawaban</button> -->
							</center>
								<div class="row">



									<!-- Pricing Single Content -->
									<div id="row" class="col-sm-6 col-md-12 ">
										 <div  id="boox" class="mu-pricing-single animate__animated animate__backInRight" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); display: none;">

											<div class="mu-pricing-single-head">
												<h4>Pertanyaan Yang Sering Diajukan</h4>
												<p class="mu-price-tag">
													<!-- <h3>IDR 100.000 ~ 1.000.000</h3> -->
												</p>
											</div>

											<div class="" style="text-align: left; margin-left: 15px;">
												<div class="" style="margin-left: 12px; ">
												<ul>
													<li style="font-weight: bold;">Apa itu ebunga ? <button id="tanya1" class="badge badge-primary" style="background-color: orange; float: right; margin-right: 5px;">+</button>

													<button id="tutup1" class="badge badge-primary" style="background-color: orange; display: none; float: right; margin-right: 5px; ">-</button></li>

													<div id="jwb1" class="jwb1" style="margin-top: 20px; display: none;">
														 Bisnis e-commerce yang memudahkan masyarakat untuk kirim bingkisan ucapan ke teman, keluarga, dan kenalannya dimana saja di Indonesia tanpa perlu membayar ongkos kirim.
													</div>

													<hr>
													<li style="font-weight: bold;">Manfaat bergabung diebunga? 

													<button id="tanya2" class="badge badge-primary" style="background-color: orange; float: right; margin-right: 5px;">+</button>
													<button id="tutup2" class="badge badge-primary" style="background-color: orange; display: none; float: right; margin-right: 5px; ">-</button></li>

													</li>

													<div id="jwb2" class="jwb2" style="margin-top: 20px; display: none;">
													 Anda akan mendapatkan cashback seumur hidup dan tentunnya belanja tanpa ongkir.
													</div>

													<hr>
													<li style="font-weight: bold;">Produk apa saja yang dijual ebunga ? 
													<button id="tanya3" class="badge badge-primary" style="background-color: orange; float: right; margin-right: 5px;">+</button>

													<button id="tutup3" class="badge badge-primary" style="background-color: orange; display: none; float: right; margin-right: 5px;">-</button></li>

													</li>
													<div id="jwb3" class="jwb3" style="margin-top: 20px; display: none;">
														 BUNGA, PAPAN BUNGA, PARCEL dan CAKE.
													</div>
													<hr>



													<li style="font-weight: bold;">Cara pemesanan diebunga ? 
													<button id="tanya4" class="badge badge-primary" style="background-color: orange; float: right; margin-right: 5px;">+</button>

													<button id="tutup4" class="badge badge-primary" style="background-color: orange; display: none; float: right; margin-right: 5px; ">-</button></li>

													</li>

													<div id="jwb4" class="jwb4" style="margin-top: 20px; display: none; ">
														Masukan kelurahan tujuan pengantaran produ, pilih produk yang tersedia & lakukan proses pembayaran. 
													</div>
													<hr>
													<li style="font-weight: bold">Bagaimana harganya ?

													 <button id="tanya5" class="badge badge-primary" style="background-color: orange; float: right; margin-right: 5px;">+</button>

													 <button id="tutup5" class="badge badge-primary" style="background-color: orange; display: none; float: right; margin-right: 5px; ">-</button></li>
													</li>

													<div id="jwb5" class="jwb5" style="margin-top: 20px; display: none;">
														Harga lokal pastinya murah. 
													</div>

													<hr>



												</ul>
												</div>
											</div>
											

										</div>
									</div>

									<!-- --------------------------- -->

									
									
								</div>
							
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		</section>


	
		<!-- Start Contact -->
		<section id="mu-contact" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title ">Kirimkan Pesan Anda</h2>
								<span class="mu-header-dot" style="background-color: orange;"></span>
								<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p> -->
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


	</main>

	
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo" style="background-color: silver;">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">

					
					<!-- <label><ul>	<li>Kantor 1 : Komp Cemara Asri, jl.Tanjung no.10, Deli Serdang.</li></ul></label><br>
					<label><ul> <li>Kantor 2 : Jl.Cemara No.15 A, Deli Serdang.</li></ul></label><br> -->
					<label>Kantor 1 : Komp Cemara Asri, jl.Tanjung No.10, Deli Serdang.</label><br>
					<label>Kantor 2 : Jl.Cemara No.15 A, Deli Serdang.</label><br>
					
					<label>Hotline / WA :  0821-6751-1111 </label><br>
					<a href="https://www.facebook.com/ebungasuksesmakmur" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/ebunga_com/" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCckDN3oAXos7DQhYugR9SZQ" target="_blank"><i class="fab fa-youtube"></i></a>
					<!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://www.ebunga.com" target="_blank">ebungaa</a>. All right reserved.</p>
			</div>
		</div>

	</footer>

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <!-- <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
  </script> -->

  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

	 <script class="source" type="text/javascript">
			 var ad = $("#example").attr('class');
		    $('#example').countdown({
		    date: ad+" 23:59:59"
		    }, function () {
		      alert('Tidak Ada Promo');
		    });
  	</script>

	<script>
            $("#DateCountdown").TimeCircles();
          
     </script>    




	<!-- End footer -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
	
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
   	<script src="<?= base_url() ?>assets3/dist/wow.js"></script>
 
    <!-- Custom js -->
	<script type="text/javascript" src="<?= base_url() ?>assets2/js/custom.js"></script>
	

   
		 <script>
              new WOW().init();
          </script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>



<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

	
</script>






<script>
	$(document).ready(function(){
		$("#pertanyaan").click(function(){
			$("#boox").show(500)
			$('#pertanyaan').hide();
			$("#jawaban").show();
		});

		$("#jawaban").click(function(){
			$("#boox2").show(500);
			$('#pertanyaan').hide();
			$("#jawaban").show();
		})
	})
</script>

<script>
	$(document).ready(function(){

		$("#jawaban").click(function(){

			$("#row").removeClass('col-md-12');
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tanya1").click(function(){
			$(this).hide();
			$("#jwb1").show(200);
			$("#tutup1").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tanya2").click(function(){
			$(this).hide();
			$("#jwb2").show(200);
			$("#tutup2").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tanya3").click(function(){
			$(this).hide();
			$("#jwb3").show(200);
			$("#tutup3").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tanya4").click(function(){
			$(this).hide();
			$("#jwb4").show(200);
			$("#tutup4").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tanya5").click(function(){
			$(this).hide();
			$("#jwb5").show(200);
			$("#tutup5").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tutup1").click(function(){
			$(this).hide();
			$("#jwb1").hide(200);
			$("#tanya1").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tutup2").click(function(){
			$(this).hide();
			$("#jwb2").hide(200);
			$("#tanya2").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tutup3").click(function(){
			$(this).hide();
			$("#jwb3").hide(200);
			$("#tanya3").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tutup4").click(function(){
			$(this).hide();
			$("#jwb4").hide(200);
			$("#tanya4").show();
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("#tutup5").click(function(){
			$(this).hide();
			$("#jwb5").hide(200);
			$("#tanya5").show();
		})
	})
</script>

<script>

	$(document).ready(function(){
		$(window).resize(function(){
			if ( $(window).width() <= 991 ) {
				
			
				$("#media0").show();

				$("#media1").hide();
				
			}
		})
	})
	
</script>



    
  </body>
</html>