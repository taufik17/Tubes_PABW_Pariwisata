<!DOCTYPE html>
<html lang="en">
  <head>
    <title>pariwisata - PABW</title>
    <meta charset="utf-8">

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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a href="<?php echo base_url();?>" class="navbar-brand">
          <img src="<?php echo base_url();?>asset/images/logo.png" width="50%" alt="TUBES PABW">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item control active"><a href="<?php echo base_url(); ?>" class="nav-link icon-home">&nbspBeranda</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Wisata" class="nav-link icon-map">&nbspWisata</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Hotel" class="nav-link icon-hotel">&nbspHotel</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Kuliner" class="nav-link icon-cutlery">&nbspKuliner</a></li>
            <li class="nav-item control"><a href="<?php echo base_url(); ?>Tentang" class="nav-link icon-info">&nbspTentang</a></li>
            <li class="nav-item control">
		    <a href="#" data-toggle="modal" data-target="#daftar-modal" class="nav-link icon-plus">&nbspObjek&nbspWisata</a>
		  </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url();?>asset/images/bg_lampung.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Pariwisata <br></strong> Sang Bumi Ruwa Jurai</h1>
            <div class="block-17 my-4">
              <form action="<?php echo base_url("Beranda/cari/")?>" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="kategori" id="" class="form-control" placeholder="Keyword search">
                      <option value="">--Kategori--</option>
                      <option value="hotel">Hotel</option>
                      <option value="kuliner">Kuliner</option>
                      <option value="wisata">Tempat wisata</option>
                    </select>
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="lokasi" id="" class="form-control" placeholder="Keyword search">
                      <option value="">--Lokasi--</option>
                      <?php foreach ($tempat ->result() as $tmpt ) { ?>
                      <option value="<?php echo $tmpt->id_daerah; ?>"><?php echo $tmpt->nama_daerah ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Temukan">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Jaminan Harga Terbaik</h3>
                <p>Harga dapat dipertanggung jawabkan, karena tanpa melalui pihak ketiga.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Favorit Wisatawan</h3>
                <p>Menampilkan data objek wisata yang favorit, dan sering dikunjungi wisatawan.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Dukungan Khusus Kami</h3>
                <p>Dukungan penuh dari kami, jika ada pertanyaan atau keluhan di contact center / chat interaktif.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Tempat Wisata<strong> Favorit</strong></h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
              <?php foreach ($wisata->result() as $nwisata ) {
                ?>
    					<div class="item">
		    				<div class="destination">
		    					<a href="<?php echo base_url();?>wisata/pos/<?php echo $nwisata->id_wisata; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $nwisata->gambar; ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="<?php echo base_url();?>wisata/pos/<?php echo $nwisata->id_wisata; ?>"><?php echo $nwisata->nama_wisata; ?></a></h3>
		    					</div>
		    				</div>
	    				</div>
              <?php } ?>
              <!-- end favorit -->
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Hotel &amp; Penginapan</strong> Populer</h2>
          </div>
        </div>
    	</div>
    	<div class="container-fluid">
    		<div class="row">
          <?php foreach ($hotel->result() as $nhotel ) {
            ?>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="<?php echo base_url();?>hotel/pos/<?php echo $nhotel->id_hotel; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $nhotel->gambar; ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="<?php echo base_url();?>hotel/pos/<?php echo $nhotel->id_hotel; ?>"><?php echo $nhotel->nama_hotel; ?></a></a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price"><?php echo $nhotel->harga; ?></span>
    							</div>
    						</div>
    						<p><?php echo $nhotel->deskripsi; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <?php echo $nhotel->tempat; ?></span>
    							<span class="ml-auto"><a href="<?php echo base_url();?>hotel/pos/<?php echo $nhotel->id_hotel; ?>">Booking</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
          <?php } ?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Kuliner</strong> Populer</h2>
          </div>
        </div>
    		<div class="row">
          <?php foreach ($kuliner->result() as $nkuliner ) {
            ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="destination">
    					<a href="<?php echo base_url();?>kuliner/pos/<?php echo $nkuliner->id_resto; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $nkuliner->gambar; ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="<?php echo base_url();?>kuliner/pos/<?php echo $nkuliner->id_resto; ?>"><?php echo $nkuliner->nam_resto; ?></a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    						</p>
    						<p><?php echo $nkuliner->deskripsi; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <?php echo $nkuliner->tempat; ?></span>
    							<span class="ml-auto"><a href="<?php echo base_url();?>kuliner/pos/<?php echo $nkuliner->id_resto; ?>">Selengkapnya</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
          <?php } ?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <h2 class="mb-4 pb-3"><strong>Kenapa</strong> Kami?</h2>
            <p>Informasi wisata yang diberikan adalah informasi terupdate dan dapat dipercaya, bekerjasama dengan banyak client owner objek wisata di lampung</p>
            <p>Bagi pemilik yang ingin menambahkan tempat wisatanya (objek wisata buatan) dapat dengan mudah menjadi agen dan mempromosikan objek wisatanya disini.</p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <h2 class="mb-4 pb-3"><strong>Testimoni</strong></h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
                  <?php foreach ($testimoni->result() as $ntestimoni ) {
                    ?>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $ntestimoni->foto; ?>)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5"><?php echo $ntestimoni->text; ?></p>
		                    <p class="name"><?php echo $ntestimoni->nama; ?></p>
		                    <span class="position"><?php echo $ntestimoni->asal; ?></span>
		                  </div>
		                </div>
		              </div>
                  <?php } ?>
                  <!--end tiestimoi -->
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h3 style="color:white;">Subscribe Untuk Mendapatkan Info Terbaru</h3>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Alamat Email">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
