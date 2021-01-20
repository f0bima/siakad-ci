<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>SIAKAD V2</title>
		<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('template');?>/favicon.ico">
		<link rel="icon" href="<?php echo base_url('template');?>/favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?php echo base_url('template');?>/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="<?php echo base_url('template');?>/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="<?php echo base_url('template');?>/dist/img/logo.png" alt="brand"/>
						<span class="brand-text">SIAKAD</span>
					</a>
				</div>

				<?php 
				if ($page=='form_login') {
					$text="Belum Memiliki Akun?";
					$url= "register";
					$head = "Masuk";
				}
				elseif ($page=='form_register') {
					$text="Sudah Memiliki Akun?";
					$url= "login";
					$head = "Daftar";
				}
				?>

				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10"><?php echo "$text"; ?></span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" <?php echo anchor($url, 'Klik Disini'); ?></a>
				</div>


				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10"><?php echo "$head"; ?> SIAKAD</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										
										<?php 
										$this->load->view($page);
										?>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?php echo base_url('template');?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('template');?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('template');?>/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<script src="<?php echo base_url('template');?>/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo base_url('template');?>/dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?php echo base_url('template');?>/dist/js/init.js"></script>
	</body>
</html>