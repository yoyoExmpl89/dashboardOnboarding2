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
		
		
		<!-- Datatables -->
    
		<link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">
		<style>
			.dt-buttons{
				margin: 10px 0;
				float: right;
			}
			
.error {
    color: #ff0000;
    border: solid 2px #ff0000;
}
		</style>
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">

	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
			<!-- Loader -->
			<div id="loading">
						</div>
			<?php echo $navs; ?>
			<?php echo $sidenavs; ?>
			
			<?php echo $content; ?>

			<?php //echo $footer; ?>
			
			<?php //echo $sideright; ?>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
		
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
		
		<!-- Bootstrap -->
	   <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
	   		<!-- bootstrap-progressbar -->
		<script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
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
		
		    <!-- Datatables -->
		<script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/`vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/jszip/dist/jszip.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js'></script>

		<script>
		document.addEventListener('DOMContentLoaded', function() {
		 if (!Notification) {
		  alert('Desktop notifications not available in your browser. Try Chromium.');
		  return;
		 }

		 if (Notification.permission !== 'granted')
		  Notification.requestPermission();
		});		
		
<<<<<<< HEAD
		var socket = io.connect('192.168.3.15:9666');
=======
		var socket = io.connect('172.16.137.15:9666');
>>>>>>> 31a09c51d4e03c61362100eecb400405a8b49eb6
		var room = "<?php echo md5($this->session->userdata('email'));?>";
		socket.on('connect', function () {
			console.log('connected');

			/*socket.on('broadcast', function (data) {
				var notification = new Notification('Nasabah Baru', {
					icon: 'http://career.trimegah.com/theme/assets/img/logo-trimegah.png',
					body: data.text,
				});
				notification.onclick = function() {
				   window.open('http://stackoverflow.com/a/13328397/1269037');
				};
			});*/
			socket.emit('join_room', { 'id' : room });
			socket.on('message', function(data){
				//var datax = JSON.parse(data);
				alert('Nasabah Baru atas name : ' + data['name']);
				var notification = new Notification('Nasabah Baru', {
					icon: 'http://career.trimegah.com/theme/assets/img/logo-trimegah.png',
					body: "Nama Nasabah : " + data['name'] + "\n" + "Email : " + data['email'],
				});
				notification.onclick = function() {
<<<<<<< HEAD
				   window.open('http://192.168.3.15/dashboardOnboarding/');
=======
				   window.open('http://172.16.137.15/dashboardOnboarding/');
>>>>>>> 31a09c51d4e03c61362100eecb400405a8b49eb6
				};
			});

			socket.on('disconnect', function () {
				console.log('disconnected');
			});
		});		
		
		
		var table;
		/*$.extend( true, $.fn.dataTable.defaults, {
			"searching": true,
			"ordering": true
		} );	*/	
				
		
		$(document).ready(function() {
			

			//--initiate datatable first
			table = $("#datatablefix").DataTable({
				"ordering"		: true,
				"info"			: false,
				"lengthChange"	: false
			});			
			
			
			var url      = window.location.href;
			var urlfix = url.split("/");
			
			if(urlfix[5] === 'get_client_step_home'){
				//alert("load data table");
				$('#step').val(urlfix[6]);
				
				table = $('#datatablefix').DataTable({
						"processing": true,
						"serverSide": false,
						"paging"	: true,
						"order" 	: [],
						//"dom"		: '<"dt-buttons"Bf><"clear">',
						"buttons"	: [
							'excel',
							'copy',
							'csv'
						],
						"columnDefs":[
							{
								"targets":[0, 6, 7,8,9,10,11,12,13,14,15,16,17],
								"orderable":false,
							},
						],
						"lengthChange"	: false,
						//"lengthMenu": [[10, 50, -1], [10, 50, "All"]],						
						"ajax": {
							"url"	: "http://172.16.137.15/dashboardOnboarding/client/get_data_real",
							"type"	: "POST",
							"data" 	: function ( d ) 	{
								d.step 			= urlfix[6];
								d.branch 		= 'all';
								d.sales 		= 'all';
								d.referalcode 	= '';
								d.startDate 	= '2020-04-01';
								d.endDate 		= '2020-04-30';
								d.page 			= 1;
								d.sort_field 	= "nama";
								d.direction		= "asc";
								d.length 		= 10;
								d.start  		= 1;
							}
						},
						"destroy"	: true,	
						"columns"   : [
							{'data'	:	'no'},
							{'data'	:	'name'},
							{'data'	: 	'nik'},
							{'data'	: 	'no_hp'},
							{'data'	: 	'email'},
							{'data'	: 	'regis_step'},
							{'data'	: 	'regis_status'},
							{'data'	: 	'reviews_status'},
							{'data'	: 	'cif_no'},
							{'data'	: 	'sid'},
							{'data'	: 	'sre'},
							{'data'	: 	'ifua'},
							{'data'	: 	'branch'},
							{'data'	: 	'sales_code'},
							{'data'	: 	'sales_name'},
							{'data'	: 	'source_regis'},
							{'data'	: 	'created_date'},
							{'data'	: 	'error_reason'},
							
						]
					});
					
					table.buttons().container().appendTo( $('#hidden-btn' ) );
					$('#export-excel').on('click', function () {
						table.button(0).trigger();
					});
					table.buttons().container().appendTo( $('#hidden-btn-cp' ) );
					$('#export-cp').on('click', function () {
						table.button(1).trigger();
					});
					table.buttons().container().appendTo( $('#hidden-btn-csv' ) );
					$('#export-csv').on('click', function () {
						table.button(2).trigger();
					});					
										
				
				
				
				
			}			
			
			$('.progress .progress-bar').progressbar({display_text: 'center', use_percentage: false});

			$("#sourceregis").on('change', function(){
				console.log("list item selected");
				var val = $(this).val();    

				//alert(val);
				
				$.ajax({
					url 	: "<?php echo site_url('Dashboard/summary_data'); ?>",
					type 	: "POST",
					data 	: {status: val},
					success : function(data){
						var response = JSON.parse(data);
						var windows  = Number(response.windows);
						var mac 	 = Number(response.mac);
						var android  = Number(response.android);
					    var iphone 	 = Number(response.iphone);
						var total   = windows+mac+android+iphone;
						
						/*var SIT = window.setTimeout(function(){
						  document.getElementById("websitebar").setAttribute("data-transitiongoal", total);
						  console.log(document.getElementById('websitebar'));
						  window.clearTimeout(SIT);
						},2000);
						//alert(total);
						//console.log(Number(total));
						//$("#websitebar").attr('data-transitiongoal',total);
						//document.getElementById("websitebar").setAttribute("data-transitiongoal", "10");
*/
						//$("#websitebar").attr('aria-valuenow', Number(total)).css('width', Number(total));
						var $pb = $('.websitebar');
						$pb.attr('data-transitiongoal', total).progressbar({display_text: 'center', use_percentage: false});
						
						$("#websitebartotal").text(total);
						$("#totalbartotal").text(total);
						
						var $pb = $('.totalbar');
						$pb.attr('data-transitiongoal', total).progressbar({display_text: 'center', use_percentage: false});
						
					}
				});
			});
			$("#errorreason").on('change',function(){
				console.log("list item selected");
				
				var val = $(this).val();
				//alert(val);
				$.ajax({
					url 	: "<?php echo site_url('Dashboard/error_data');?>",
					type 	: "POST",
					data    : {status : val},
					success : function(data){
						var response = JSON.parse(data);
						var sessionexpired = Number(response.session_expired);
						//alert(sessionexpired);
						var invalid_otp = Number(response['invalid_client_data'].invalid_otp);
						//alert(invalid_otp);
						var email_exist_in_system 			= Number(response['invalid_client_data'].email_exist_in_system);
						var nik_exist_in_system 			= Number(response['invalid_client_data'].nik_exist_in_system);
						var nik_not_found_in_dukcapil 		= Number(response['invalid_client_data'].nik_not_found_in_dukcapil);
						var nik_exist_in_system_suspended 	= Number(response['invalid_client_data'].nik_exist_in_system_suspended);
						var nik_exist_in_system_closed 		= Number(response['invalid_client_data'].nik_exist_in_system_closed);
						var totaldatainvalid = invalid_otp+email_exist_in_system+nik_exist_in_system+nik_not_found_in_dukcapil+nik_exist_in_system_suspended+nik_exist_in_system_closed;
						
						var $invaliddata = $('.invalidclientbar');
						$invaliddata.attr('data-transitiongoal', totaldatainvalid).progressbar({display_text: 'center', use_percentage: false});
						
						var $session = $('.sessionexpiredbar');
						$session.attr('data-transitiongoal', sessionexpired).progressbar({display_text: 'center', use_percentage: false});
						
						$("#sessionexpiredbartotal").text(sessionexpired);
						$("#invalidclientbartotal").text(totaldatainvalid);
						
						var totalall = sessionexpired+totaldatainvalid;
						var $totalalla = $('.totalerrorbar');
						$totalalla.attr('data-transitiongoal', totalall).progressbar({display_text: 'center', use_percentage: false});
						$("#totalerrorbartotal").text(totalall);
						
						
						
					}
				});
				
			});				
		
			
			$("#form").validate({
				rules: {
					step: {
						required:true,
					}
				},	
				messages: {
					step: {
						required: "Please select an option from the list",
					}
				},
				highlight: function (element, errorClass, validClass) {
					//return false;
					$(element).addClass('step').removeClass('step');
				},
				unhighlight: function (element, errorClass, validClass) {
					//return false;
					$(element).addClass('step').removeClass('step');
				}
			});
			
			
			//resend link
			$("#buttonresend").click(function(e){
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.15/dashboardOnboarding/client/resend_link',
					data: {email_to: $("#emailphoto").val(),nama:$("#namaphoto").val()},
					success: function (data) {
						var response = JSON.parse(data);
						alert(response.desc);
					}
				});				
			});
			
			
			//retake ktp
			$("#retakektp").click(function(e){
				//alert($("#namaphoto").val());
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.15/dashboardOnboarding/client/retake_email',
					data: {email_to: $("#emailphoto").val(),nama:$("#namaphoto").val(),type:'KTP'},
					success: function (data) {
						var response = JSON.parse(data);
						alert(response.desc);
					}
				});
				
			});
			// retake selfie ktp
			$("#retakeselfie").click(function(e){
				//alert($("#namaphoto").val());
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.15/dashboardOnboarding/client/retake_email',
					data: {email_to: $("#emailphoto").val(),nama:$("#namaphoto").val(),type:'SELFIE KTP'},
					success: function (data) {
						var response = JSON.parse(data);
						alert(response.desc);
					}
				});
				
			});
			$("#retakenpwp").click(function(e){
				//alert($("#namaphoto").val());
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.15/dashboardOnboarding/client/retake_email',
					data: {email_to: $("#emailphoto").val(),nama:$("#namaphoto").val(),type:'NPWP'},
					success: function (data) {
						var response = JSON.parse(data);
						alert(response.desc);
					}
				});
				
			});	
			$("#retakekk").click(function(e){
				//alert($("#namaphoto").val());
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.15/dashboardOnboarding/client/retake_email',
					data: {email_to: $("#emailphoto").val(),nama:$("#namaphoto").val(),type:'KK'},
					success: function (data) {
						var response = JSON.parse(data);
						alert(response.desc);
					}
				});
				
			});				
			
			
			//ajax post comment
			/*$('#formcomment').on('submit', function (e) {
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'http://192.168.3.16:4003/api/process_logs',
					data: {nik: $("#nik").val(),status:$("#status").val(),notes:$("#notes").val(),created_by:$("#created_by").val()},
					success: function (data) {
						alert("sukses");
						location.reload();
					}
				});
				//location.reload();
			});*/
			$('#formcomment').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'http://172.16.137.16:4003/api/process_logs',
					data: {nik: $("#nik").val(),status:$("#status").val(),notes:$("#notes").val(),created_by:$("#created_by").val()},
					success: function (data) {
						//alert("sukses");
						//location.reload();
					}
				});				
				alert("sukses");
				location.reload();
			});
			
			
			//step 1
			$.ajax({
				url 	: "<?php echo site_url('Dashboard/step1'); ?>",
				type	: "GET",
				success : function(data){
					var response = JSON.parse(data);
					//alert(response[0].total);
					//alert(obj.total);
					$("#step1").append(response[0].total);
				}  
			});
			$.ajax({
				url 	: "<?php echo site_url('Dashboard/step2'); ?>",
				type	: "GET",
				success : function(data){
					var response = JSON.parse(data);
					//alert(response[0].total);
					//alert(obj.total);
					if(response[0].total > 0){
						$("#step2").append(response[0].total);
					}else{
						$("#step2").append("0");
					}
				}  				
			});
			$.ajax({
				url 	: "<?php echo site_url('Dashboard/step3'); ?>",
				type	: "GET",
				success : function(data){
					var response = JSON.parse(data);
					//alert(response[0].total);
					//alert(obj.total);
					$("#step3").append(response[0].total);
				}  				
			});
			$.ajax({
				url 	: "<?php echo site_url('Dashboard/fail'); ?>",
				type	: "GET",
				success : function(data){
					var response = JSON.parse(data);
					//alert(response[0].total);
					//alert(obj.total);
					$("#fail").append(response[0].total);
				}  				
			});			
			
			$.ajax({
				url 	: "<?php echo site_url('Dashboard/finish'); ?>",
				type	: "GET",
				success : function(data){
					var response = JSON.parse(data);
					//alert(response[0].total);
					//alert(obj.total);
					$("#finish").append(response[0].total);
				}  				
			});			
			
			//step 1 dll;
			/*$.ajax({
				url : "<?php echo site_url('Dashboard/total_data'); ?>",
				method : "GET",
				async : true,
				dataType : 'json',
				success : function(data){
					
					//alert(data.length);
					//if(data[0].nama == 'step1'){
						$("#step1").append(data[0].total);
					//}else if(data[1].nama == 'step2'){
						$("#step2").html(data[1].total);
					//}else if(data[2].nama == 'step3'){
						$("#step3").html(data[2].total);
					//}else if(data[3].nama == 'fail'){
						$("#fail").html(data[3].total);
					//}else if(data[4].nama == 'finish'){
						$("#finish").html(data[4].total);
					//}
				}
			});
			*/
			
			//sales loading
			$.ajax({
				url 		: "<?php echo site_url('Client/get_sales');?>",
				method 		: "POST",
				async 		: true,
				dataType 	: 'json',
				success 	: function(data){
					var html = '';
					html += '<option value="all">All</option>';
					for(i=0;i<data.length;i++){
						html += '<option value='+data[i].sales+'>'+data[i].nama+'</option>';
					}
					$('#sales').html(html);
				}
			});
			
			//branch loading
			$.ajax({
				url : "<?php echo site_url('Client/get_branch');?>",
				method : "POST",
				async : true,
				dataType : 'json',
				success: function(data){
					//alert(data.length);
					//var obj = jQuery.parseJSON(data);
					//alert(obj.branch_name);
					var html = '';
					html += '<option value="all">All</option>';
					for(i=0;i<data.length;i++){
						html += '<option value='+data[i].branch_code+'>'+data[i].branch_name+'</option>';
					}
					$('#branch').html(html);
					
				}
			});	



			$('#submitsearch').on('click', function (e) {
				if($("#form").valid() == true){
					e.preventDefault(); // stop submission
					var startDate = $("#reportrange_right").data('daterangepicker').startDate.format('YYYY-MM-DD');
					var endDate =  $("#reportrange_right").data('daterangepicker').endDate.format('YYYY-MM-DD');
					/*$.ajax({
						'url': "http://localhost:81/dashboardOnboarding/client/get_data_list",
						'method': "POST",
						'contentType': 'application/json',
						'data' : {
							'step' 			: $("#step").val(),
							'branch' 		: $("#branch").val(),
							'sales' 		: $("#sales").val(),
							'referal_code' 	: $("referal_code").val(),
							'periode_start' : start,
							'periode_end' 	: end,
							'page' 			: 1,
							'sort_field' 	: "branch",
							'direction'		: "asc" 
						}
					//}).done( function(data) {
						//console.log(data);
						//var obj = jQuery.parseJSON(data);
						//alert(obj.data);*/
					if (  table ) {	

						table = $('#datatablefix').DataTable({
							"processing": true,
							"serverSide": false,
							"paging"	: true,
							"order"		: [],
							//"dom"		: '<"dt-buttons"Bf><"clear">',
							"buttons"	: [
								'excel',
								'copy',
								'csv'
							],
							"columnDefs":[
								{
									"targets":[0, 6, 7,8,9,10,11,12,13,14,15,16,17],
									"orderable":false,
								},
							],
							"searching": true,
							"lengthChange"	: false,
							//"lengthMenu": [[10, 50, -1], [10, 50, "All"]],						
							"ajax": {
								"url"	: "http://172.16.137.15/dashboardOnboarding/client/get_data_real",
								"type"	: "POST",
								"data" 	: function ( d ) 	{
									d.step 			= $("#step").val();
									d.branch 		= $("#branch").val();
									d.sales 		= $("#sales").val();
									d.referalcode 	= $("#referal_code").val();
									d.startDate 	= startDate;
									d.endDate 		= endDate;
									//d.page 			= 1;
									//d.sort_field 	= "nama";
									//d.direction		= "asc";
									//d.length 		= 10;
									d.start  		= 1;
								}
							},
							"destroy"	: true,
							//"iTotalRecords" : 5,
							//"iTotalDisplayRecord" : 100,
							//"aaData"	: obj.data,
							"columns"   : [
								{'data'	:	'no'}, //0
								{'data'	:	'name'}, //1
								{'data'	: 	'nik'},  //2
								{'data'	: 	'no_hp'}, //3
								{'data'	: 	'email'}, //4
								{'data'	: 	'regis_step'}, //5
								{'data'	: 	'regis_status'}, //6
								{'data'	: 	'reviews_status'}, //7
								{'data'	: 	'cif_no'}, //8
								{'data'	: 	'sid'}, //9
								{'data'	: 	'sre'}, //10
								{'data'	: 	'ifua'}, //11
								{'data'	: 	'branch'}, //12
								{'data'	: 	'sales_code'}, //13
								{'data'	: 	'sales_name'}, //14
								//{'data' : 	''},
								{'data'	: 	'source_regis'},//15
								{'data'	: 	'created_date'}, //16
								{'data'	: 	'error_reason'}, //17
								
							]
						});
						
						table.buttons().container().appendTo( $('#hidden-btn' ) );
						$('#export-excel').on('click', function () {
							table.button(0).trigger();
						});
						table.buttons().container().appendTo( $('#hidden-btn-cp' ) );
						$('#export-cp').on('click', function () {
							table.button(1).trigger();
						});
						table.buttons().container().appendTo( $('#hidden-btn-csv' ) );
						$('#export-csv').on('click', function () {
							table.button(2).trigger();
						});					
					}
				}
			});


			init_daterangepicker_right();
		
 
		});
		

		function init_daterangepicker_right() {

			if (typeof ($.fn.daterangepicker) === 'undefined') { return; }
			console.log('init_daterangepicker_right');

			var cb = function (start, end, label) {
				console.log(start.toISOString(), end.toISOString(), label);
				$('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			};

			var optionSet1 = {
				startDate: moment().subtract(2, 'days'),
				endDate: moment(),
				minDate: '01/01/2012',
				maxDate: '12/31/2020',
				dateLimit: {
					days: 60
				},
				//showDropdowns: false,
				//showWeekNumbers: false,
				//timePicker: false,
				//timePickerIncrement: 1,
				//timePicker12Hour: true,
				//ranges: {
				//	'Today': [moment(), moment()],
				//	'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				//	'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				//	'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				//	'This Month': [moment().startOf('month'), moment().endOf('month')],
				//	'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				//},
				opens: 'right',
				buttonClasses: ['btn btn-default'],
				applyClass: 'btn-small btn-primary',
				cancelClass: 'btn-small',
				format: 'MM/DD/YYYY',
				separator: ' to ',
				locale: {
					applyLabel: 'Submit',
					cancelLabel: 'Clear',
					fromLabel: 'From',
					toLabel: 'To',
					customRangeLabel: 'Custom',
					daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					firstDay: 1
				}
			};

			$('#reportrange_right span').html(moment().subtract(2, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

			$('#reportrange_right').daterangepicker(optionSet1, cb);

			$('#reportrange_right').on('show.daterangepicker', function () {
				console.log("show event fired");
			});
			$('#reportrange_right').on('hide.daterangepicker', function () {
				console.log("hide event fired");
			});
			$('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
				console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
			});
			$('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
				console.log("cancel event fired");
			});

			$('#options1').click(function () {
				$('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
			});

			$('#options2').click(function () {
				$('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
			});

			$('#destroy').click(function () {
				$('#reportrange_right').data('daterangepicker').remove();
			});

		}
		
		
		</script>
	</body>
</html>
