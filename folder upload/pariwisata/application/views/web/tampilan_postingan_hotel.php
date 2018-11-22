<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html"> </html>
<head>
    <title><?php echo $nama_hotel; ?></title>
    <meta charset="utf-8">

    <!-- Font google <-->

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min1.css">
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
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
    <div class="container">
        <a href="<?php echo base_url();?>" class="navbar-brand">
            <img src="<?php echo base_url();?>asset/images/logo.png" width="35%" alt="TUBES PABW">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" >

                <li class="nav-item control"><a href="<?php echo base_url(); ?>" class="nav-link icon-home">&nbspBeranda</a></li>
                <li class="nav-item control"><a href="<?php echo base_url(); ?>Wisata" class="nav-link icon-map">&nbspWisata</a></li>
                <li class="nav-item control"><a href="<?php echo base_url(); ?>Hotel" class="nav-link icon-hotel">&nbspHotel</a></li>
                <li class="nav-item control"><a href="<?php echo base_url(); ?>Kuliner" class="nav-link icon-cutlery">&nbspKuliner</a></li>
                <li class="nav-item control"><a href="about.html" class="nav-link icon-info">&nbspTentang</a></li>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <h2 class="mb-4"><strong>Rincian Hotel</strong></h2>
        <div class="row">
            <div class="col-lg-4" >
                <div class="row">
                    <div class="col-sm col-md-4 col-lg ftco-animate">
                        <div class="destination">
                            <a class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url();?>asset/images/<?php echo $gambar; ?>);">
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><?php echo $nama_hotel; ?></h3>
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
                                        <span class="price per-price"><?php echo $harga; ?><br><small>/malam</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-sm col-md-8 ">
                <div class="text p-3 card " >
                    <div class="d-flex">
                        <p>
                          <?php echo $deskripsi; ?>
                        </p>
                    </div>
            </div>
        </div>

    </div>
        <div class="text p-3 card col-lg-8" >
            <div class="d-flex">
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <title>Bootstrap Example</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">


                </head>
                <body>

                <div class="container">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a data-toggle="tab" href="#home">Lokasi</a></li>
                        <li><a data-toggle="tab" href="#menu1" >Ulasan</a></li>
                        <li><a data-toggle="tab" href="#menu2 ">Info Kontak</a></li>
                    </ul>

                    <div class="tab-content ">
                        <div id="home" class="tab-pane fade in active">
                            <?php echo $maps; ?>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <br>
                            <h3>Ulasan :</h3>
                            <p>Mantap</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <br>
                            <h3>Info Kontak :</h3>
                            <p>hotelgrandpraba@gmail.com<br></p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>

                </body>
                </html>


            </div>
        </div>
</section> <!-- .section -->
</body>
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
<script type="text/javascript">$('#tabs').tabs();</script>
<script src="<?php echo base_url();?>asset/js/jquery.min1.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min1.js"></script>

</body>
</html>
