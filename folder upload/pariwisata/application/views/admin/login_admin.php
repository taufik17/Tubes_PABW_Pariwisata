<!DOCTYPE html>

<?php
$sesilogin = $this->session->userdata('username');
if(!empty($sesilogin))
{
  header("location:administrator");
}
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Admin - Pariwisata</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon">
		<link href="<?php echo base_url();?>asset/assetadmin/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>asset/assetadmin/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/assetadmin/css/ace-skins.min.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script type="text/javascript">
	function cekform()
	{
		if (!$("#username").val())
		{
			alert('maaf pengguna tidak boleh kosong');
			$("#username").focus();
			return false;
		}
		if (!$("#password").val())
		{
			alert('maaf sandi tidak boleh kosong');
			$("#password").focus();
			return false;
		}
	}
	</script>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<br><br><br>
						<div class="login-container">
							<div class="space-6"></div>
							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border" color="yellow">
										<div class="widget-body">
											<div class="widget-main">
                        <img src="<?php echo base_url();?>asset/images/logo.png" alt="">
                        <h4 class="header blue lighter bigger">
													Masuk Sebagai Administrator
												</h4>

                        <?php
                        $info = $this->session->flashdata('info');
                        if(!empty($info))
                        {
                          echo $info;
                        }
                        ?>

												<div class="space-6"></div>
												<form method="POST" action="<?php echo base_url();?>index.php/proses_login/adminlogin" onsubmit="return cekform();">
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" name="username" id="username" class="span12" placeholder="Pengguna" />
																<i class="icon-user purple"></i>
															</span>
														</label>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" name="password" id="password" class="span12" placeholder="Sandi" />
																<i class="icon-lock purple"></i>
															</span>
														</label>
														<div class="space"></div>
														<div class="clearfix">

															<button type="submit" class="width-35 pull-right btn btn-small btn-primary">
																<i class="icon-key"></i>
																Masuk
															</button>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>
										</div><!--/widget-body-->
									</div><!--/signup-box-->
									<div class="center">
								<h4 class="white" id="id-company-text" >&nbsp;&copy; Tubes - PABW</h4>
							</div>
							<div class="center">
								<h6 class="green" >
							<marquee class="center" direction="up" height="50" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="1.5">
							1. Taufik Agung Santoso<br/>
							2. Yulianto Pambudi<br/>
							3. Gandung<br/>
							4. Dean Christoper<br/>
							5. Pasha Abdul Khalid<br/>
							6. Ahmad Reza Aidil A<br/>
							</marquee></h6>
							</div>
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->
    <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>asset/assetadmin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='asset/assetadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>asset/assetadmin/js/bootstrap.min.js"></script>
	</body>
</html>
