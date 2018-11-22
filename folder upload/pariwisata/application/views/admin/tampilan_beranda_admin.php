<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Administrator Pariwisata</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->
		<link href="<?php echo base_url();?>asset/assetadmin/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>asset/assetadmin/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css">

		<link rel="<?php echo base_url();?>stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="<?php echo base_url();?>Administrator" class="brand">
						<small>
							Halaman Admin
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>asset/assetadmin/avatars/administrator.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php echo $this->session->userdata('username'); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>Administrator/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<img src="<?php echo base_url();?>img/logoct.png" alt="">
				</div><!--#sidebar-shortcuts-->
				<?php $this->load->view('admin/tampilan_menu_admin'); ?>

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#"><?php echo $judul; ?></a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active"><?php echo $sub_judul; ?></li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Temukan sesuatu ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">


					<div class="row-fluid">
						<!--PAGE CONTENT BEGINS-->
						<?php $this->load->view($content); ?>
						<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>asset/assetadmin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/assetadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>asset/assetadmin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>asset/assetadmin/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/ace.min.js"></script>

		<!--inline scripts related to this page-->


		<style type="text/css">
		html,
		body {
		   margin:0;
		   padding:0;
		   height:100%;
		}
		#container {
		   min-height:100%;
		   position:relative;
		}
		#header {
		   background:#ff0;
		   padding:10px;
		}
		#body {
		   padding:10px;
		   padding-bottom:60px;   /* sesuaikan dengan tinggi footer */
		}
		#footer {
		   	color: #808080;
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    padding: 10px;
		    background-color: #f2f2f2;
		    text-align: center;
		}
		</style>
		   <div id="footer">
		   		Copyright &copy; 2018 Tugas Besar PABW
		   </div>
	</body>
</html>
