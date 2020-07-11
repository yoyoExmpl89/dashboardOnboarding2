<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>TRIMA</title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
		<!-- bootstrap-daterangepicker -->
		<link href="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

	</head>

	<body class="nav-md">
		<div class="container body">
	
			<!-- Loader -->
			<div id="loading">
						</div>
			<?php //echo $navs; ?>
			<?php echo $sidenavs; ?>
			
			<?php echo $content; ?>

			<?php echo $footer; ?>
			
			<?php //echo $sideright; ?>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
		<!-- Bootstrap -->
	   <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js'); ?>"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js'); ?>"></script>
			<!-- ECharts -->
		<script src="<?php echo base_url('assets/vendors/echarts/dist/echarts.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/echarts/map/js/world.js'); ?>"></script>
		
			<!-- bootstrap-daterangepicker -->
		<script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
	</body>
</html>