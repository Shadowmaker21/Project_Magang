<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="shortcut icon" href="<?php echo base_url('includes/logo.png')?>">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="<?php echo base_url('includes/plugins/datatables/jquery.dataTables.min.css')?>" rel="stylesheet">
  	<link href="<?php echo base_url('includes/plugins/datatables/jquery.dataTables_themeroller.css')?>" rel="stylesheet">

	<link href="<?php echo base_url('includes/frontend/css/style.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/adminlte.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/font-awesome/css/font-awesome.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/app.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/_all-skins.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/flipclock.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/animate.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/select2.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/daterangepicker.css')?>" rel="stylesheet">
	
	<link href="<?php echo base_url('includes/plugins/pnotify/pnotify.custom.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/plugins/iCheck/square/green.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/plugins/iCheck/flat/green.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('includes/backend-lte/css/summernote.css')?>" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo base_url('includes/plugins/pace/pacecounter.css')?>">
	
	<!-- <script src="<?php echo base_url('includes/frontend/js/jquery.js')?>"></script> -->
	<script src="<?php echo base_url('includes/plugins/datatables/jquery-2.2.3.min.js')?>"></script>
	
	<script src="<?php echo base_url('includes/frontend/js/flipclock.js')?>"></script>
	
	<script src="<?php echo base_url('includes/backend-lte/js/app.min.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/jquery.validate.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/select2.full.min.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/jquery.bootgrid.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/moment.min.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/bootstrap-notify.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/new.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/jquery.slimscroll.min.js')?>"></script>
	<script src="<?php echo base_url('includes/backend-lte/js/daterangepicker.js')?>"></script>
	<script src="<?php echo base_url('includes/plugins/pnotify/pnotify.custom.min.js')?>"></script>
	<script src="<?php echo base_url('includes/plugins/iCheck/icheck.min.js')?>"></script>
	<script src="<?php echo base_url('includes/plugins/pace/pace.min.js')?>"></script>
	<script src="<?php echo base_url('includes/plugins/datatables/jquery.dataTables.min.js')?>"></script>
	
	<script type="text/javascript">
	  function notify(jenis,pesan){
	    $.notify({
	      // options
	      message: pesan
	      },{
	      // settings
	      element: 'body',
	      type: jenis,
	      showProgressbar: false,
	      placement: {
	        from: "top",
	        align: "center"
	      },
	      animate: {
	        enter: 'animated fadeInDown',
	        exit: 'animated fadeOutUp'
	      }
	    });
	  }
  	</script>
	<!-- <style type="text/css">
		[data-notify="progressbar"] {
			margin-bottom: 0px;
			position: absolute;
			bottom: 0px;
			left: 0px;
			width: 100%;
			height: 5px;
		}
		.green{
			color:#53B257;
		}
		.task{
			background: #fcfcfc;
		    border: 1px solid #eee;
		    margin-bottom: 10px;
		    border-left: 3px solid #eee;
		    padding: 10px 15px;
		    font-size: 13px;
		}
		body{
			font-family:jenis8;	
		}
		.ft11{
			font-family: ft11;
		}
		h5,h4{
			font-family: jenis10;
		}
		ol>li{
			font-family: ft11;
		}
		.head{
			font-family: ft9;
			text-transform: uppercase;
		}
		.head2{
			line-height: 2;
			padding-left: 15px;
			font-family: ft11;
		}
		.orange{
			color:#FF851B;
			text-decoration: underline;
			text-decoration: italic;
		}
		.red{
			color:#DD4B39;
			text-decoration: underline;
			text-decoration: italic;
		}
		.thick{
			font-family: ft10;
		}
		.box-title{
			font-family: ft11;
		}
		thead{
			font-family: ft9;
		}
		.flip-clock-divider .flip-clock-label{
			color:black;
		}
		th{
			height:50%;
		}
		#placesasaran{
			color:#F39C12;
			font-family: ft9;
		}
		.btn-outline{
			font-family:jenis4;
		}
	</style> -->
<body class="hold-transition fixed skin-blue-light sidebar-mini" onload="startTime()">
