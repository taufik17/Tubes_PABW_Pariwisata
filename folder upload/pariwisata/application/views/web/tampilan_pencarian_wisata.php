<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hasil Pencarian - Wisata</title>
    <meta charset="utf-8">

    <!-- Font google <-->

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark">
      <div class="container">
        <a href="<?php echo base_url();?>" class="navbar-brand">
          <img src="<?php echo base_url();?>asset/images/logo.png" width="50%" alt="TUBES PABW">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item control"><a href="<?php echo base_url(); ?>" class="nav-link icon-home">&nbspBeranda</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Wisata" class="nav-link icon-map">&nbspWisata</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Hotel" class="nav-link icon-hotel">&nbspHotel</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Kuliner" class="nav-link icon-cutlery">&nbspKuliner</a></li>
            <li class="nav-item control"><a href="about.html" class="nav-link icon-info">&nbspTentang</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div>
      <section class="ftco-section ftco-degree-bg">
        <div class="container">
          <h2 class="mb-4"><strong>Hasil Cari</strong></h2>
          <div class="row">
            <div class="col-lg-12">
            	<div class="row">

                <?php foreach ($wisata->result() as $nwisata ) {
                  ?>
  		    			<div class="col-md-4 ftco-animate">
  		    				<div class="destination">
  		    					<a href="<?php echo base_url();?>wisata/pos/<?php echo $nwisata->id_wisata; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $nwisata->gambar; ?>);">
  		    						<div class="icon d-flex justify-content-center align-items-center">
      							<span class="icon-search2"></span>
      						</div>
  		    					</a>
  		    					<div class="text p-3">
  		    						<div class="d-flex">
  		    							<div class="one">
  				    						<h3><a href="<?php echo base_url();?>wisata/pos/<?php echo $nwisata->id_wisata; ?>"><?php echo $nwisata->nama_wisata; ?></a></h3>
  				    						<p class="rate">
  				    							<i class="icon-star"></i>
  				    							<i class="icon-star"></i>
  				    							<i class="icon-star"></i>
  				    							<i class="icon-star"></i>
  				    							<i class="icon-star-o"></i>
  				    						</p>
  			    						</div>
  			    						<div class="two">
  			    							<span class="price per-price">$40<br><small>/night</small></span>
  		    							</div>
  		    						</div>
  		    						<p>Far far away, behind the word mountains, far from the countries</p>
  		    						<hr>
  		    						<p class="bottom-area d-flex">
  		    							<span><i class="icon-map-o"></i> Miami, Fl</span>
  		    							<span class="ml-auto"><a href="<?php echo base_url();?>wisata/pos/<?php echo $nwisata->id_wisata; ?>">Kunjungi</a></span>
  		    						</p>
  		    					</div>
  		    				</div>
  		    			</div>
                <?php } ?>
            	</div>
            </div> <!-- .col-md-8 -->
          </div>
        </div>
      </section> <!-- .section -->
    </div>
    <!-- footer -->
    <?php $this->load->view('web/tampilan_footer'); ?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/aos.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>asset/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/scrollax.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/google-maps-aes.js"></script>
  <script src="<?php echo base_url();?>asset/js/google-map.js"></script>
  <script src="<?php echo base_url();?>asset/js/main.js"></script>

  </body>
</html>
