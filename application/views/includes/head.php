<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">	
	<link rel="stylesheet" href="<?php echo base_url('includes/library/bootstrap/font.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/library/bootstrap/bootstrap.min.css')?>" media="screen,projection">
	
	<link rel="stylesheet" href="<?php echo base_url('includes/library/datatables/dataTables.bootstrap.css')?>">

	<link rel="stylesheet" href="<?php echo base_url('includes/library/adminlte/adminlte.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/library/adminlte/_all-skins.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/library/fontawesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/library/izitoast/iziToast.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/library/datepicker/bootstrap-datepicker.css')?>">

	<script src="<?php echo base_url('includes/library/jquery/jquery-2.2.3.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/bootstrap/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/jquery/jquery-ui.js')?>"></script>
	<script src="<?php echo base_url('includes/library/jquery-validate/jquery.validate.js')?>"></script>
	<script src="<?php echo base_url('includes/library/adminlte/app.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/izitoast/iziToast.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/slimscroll/jquery.slimscroll.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/dragscroll/dragscroll.js')?>"></script>
	<script src="<?php echo base_url('includes/library/datepicker/bootstrap-datepicker.js')?>"></script>
	<script src="<?php echo base_url('includes/library/datatables/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('includes/library/datatables/dataTables.bootstrap.min.js')?>"></script>

	<script src="<?php echo base_url('includes/library/adminlte/demo.js')?>"></script>
	<script type="text/javascript">
	  function change_password(){
	      data={judul:'Ganti Password',name:' '};
	      $("#tomboll").html('');
	      modal_ajax(data,'POST','<?php echo base_url('pengguna/change_password')?>','html','#preview',0);
	  }
  	</script>
  	<style type="text/css">
	  	.info-box-text{
		    font-size: 15px;
		}

		.info-box-number{
		    font-size: 35px;
		}
	</style>
	<body class="sidebar-mini skin-black-light fixed">
