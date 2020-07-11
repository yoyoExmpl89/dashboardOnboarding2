<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="Description" content="HTML5 Bootstrap Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin template,admin website templates,analytics,analytics admin,analytics dashboard,bootstrap admin template,bootstrap analytics dashboard,bootstrap dashboard,css admin template,css dashboard template,dashboard html5,digital marketing analytics,html web app template,html5 dashboard template,marketing analytics,nice admin template,simple admin template,site analytics,web admin template,web app template,web dashboard templates">

		<!-- Favicon -->
		<link rel="icon" href="<?php echo base_url('assets/img/brand/favicon.ico'); ?>" type="image/x-icon"/>

		<!-- Title -->
		<title>Dashboard Processing - On Boarding</title>

		<!-- Font Awesome -->
		<link href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

		<!-- Ionicons -->
		<link href="<?php echo base_url('assets/plugins/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">

		<!-- Typicons -->
		<link href="<?php echo base_url('assets/plugins/typicons.font/typicons.css'); ?>" rel="stylesheet">

		<!-- Sidebar css -->
		<link href="<?php echo base_url('assets/plugins/sidebar/sidebar.css'); ?>" rel="stylesheet">

		<!-- Side menu css-->
		<link href="<?php echo base_url('assets/plugins/sidemenu/sidemenu.css'); ?>" rel="stylesheet">

		<!-- Custom Scroll bar-->
		<link href="<?php echo base_url('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet"/>

		<!-- Select2 css -->
		<link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">

		<!-- morris css -->
		<link href="<?php echo base_url('assets/plugins/morris.js/morris.css'); ?>" rel="stylesheet">

		<!--Bootstrap-daterangepicker css-->
		<link href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet" >

		<!-- Default Style -->
		<link href="<?php echo base_url('assets/css/dashboard-one.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/dashboard-one-dark.css'); ?>" rel="stylesheet">

		<!-- Icon Style -->
		<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet">

		<!-- lightslider Css -->
		<link href="<?php echo base_url('assets/plugins/lightslider/css/lightslider.min.css'); ?>" rel="stylesheet">

		<!--crypto Css -->
		<link href="<?php echo base_url('assets/plugins/cryptofont/css/cryptofont.min.css'); ?>" rel="stylesheet">

		<!--Flag Css -->
		<link href="<?php echo base_url('assets/plugins/flag-icon-css/css/flag-icon.min.css'); ?>" rel="stylesheet">

		<!-- Data table css -->
		<link href="<?php echo base_url('assets/plugins/datatable/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatable/css/buttons.bootstrap4.min.css'); ?>">
		<link href="<?php echo base_url('assets/plugins/datatable/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" />

	</head>

	<body class="main-body app sidebar-mini">
	
		<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url('assets/img/loader1.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<?php echo $navs; ?>
		<?php echo $sidenavs; ?>
		
		<div class="main-content px-0 app-content">
	
		<?php echo $content; ?>
		
		</div>
		<?php echo $footer; ?>
		
		<?php //echo $sideright; ?>
	
		<!-- JQuery min js -->
		<!-- JQuery min js -->
		<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Bootstrap Bundle js -->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

		<!-- Eva-Icons js -->
		<script src="<?php echo base_url('assets/plugins/web-fonts/eva.min.js'); ?>"></script>

		<!-- Ionicons js -->
		<script src="<?php echo base_url('assets/plugins/ionicons/ionicons.js'); ?>"></script>

		<!--Chart bundle min js -->
		<script src="<?php echo base_url('assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Flot js -->
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.pie.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jquery.flot/jquery.flot.resize.js'); ?>"></script>

		<!--Peity Chart js -->
		<script src="<?php echo base_url('assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- JQuery sparkline js -->
		<script src="<?php echo base_url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>"></script>

		<!-- Sampledata js -->
		<script src="<?php echo base_url('assets/js/chart.flot.sampledata.js'); ?>"></script>

		<!-- Moment js -->
		<script src="<?php echo base_url('assets/plugins/moment/moment.js'); ?>"></script>

		<!-- select2.min js -->
		<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/select2.js'); ?>"></script>

		<!--Bootstrap-daterangepicker js-->
		<script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

		<!-- Sidebar js -->
		<script src="<?php echo base_url('assets/plugins/sidebar/sidebar.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/sidebar/sidebar-custom.js'); ?>"></script>

		<!-- Custom Scroll bar Js-->
		<script src="<?php echo base_url('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

		<!-- Vector map js -->
		<script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>

		<!-- Vector map Sampledata js -->
		<script src="<?php echo base_url('assets/js/jquery.vmap.sampledata.js'); ?>"></script>

		<!-- Side-menu JS-->
		<script src="<?php echo base_url('assets/plugins/sidemenu/closed/sidemenu.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

		<!-- Index js -->
		<script src="<?php echo base_url('assets/js/index4.js'); ?>"></script>

		<!-- Lightslider js -->
		<script src="<?php echo base_url('assets/plugins/lightslider/js/lightslider.min.js'); ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/chart.flot.sampledata.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/dashboard.sampledata.js'); ?>"></script>

		<!-- Morris js -->
		<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js'); ?>"></script>

		<!-- Data tables -->
		<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatables.net-dt/js/dataTables.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatables.net-responsive-dt/js/responsive.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/jquery.dataTables.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/dataTables.bootstrap4.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/dataTables.buttons.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/buttons.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/jszip.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/pdfmake.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/vfs_fonts.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/buttons.html5.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/buttons.print.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/buttons.colVis.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/responsive.bootstrap4.min.js'); ?>"></script>

		<!-- Datatable js -->
		<script src="<?php echo base_url('assets/js/table-data.js'); ?>"></script>
	</body>
</html>