<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 Not Found</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/asset404/css/bootstrap/bootstrap.css" />
  <!-- Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
  <!-- Base Styling  -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/asset404/css/app/app.v1.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h1 class="text-center" style="font-size:150px; font-weight:800;">404</h1>
        <p class="text-center lead">Halaman yang diminta tidak tersedia</p>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <img src="<?php echo base_url(); ?>asset/asset404/404.gif" alt="404 not found">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 text-center ">
        <hr class="">
        <a href="<?php echo base_url(); ?>">
        <button type="submit" class="btn btn-default">Beranda</button>
        </a>
      </div>
    </div>
  </div>


  <!-- JQuery v1.9.1 -->
	<script src="<?php echo base_url();?>asset/asset404/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>asset/asset404/js/plugins/underscore/underscore-min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url();?>asset/asset404/js/bootstrap/bootstrap.min.js"></script>
  <!-- Globalize -->
  <script src="<?php echo base_url();?>asset/asset404/js/globalize/globalize.min.js"></script>
  <!-- NanoScroll -->
  <script src="<?php echo base_url();?>asset/asset404/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- Custom JQuery -->
	<script src="<?php echo base_url();?>asset/asset404/js/app/custom.js" type="text/javascript"></script>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-56821827-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
