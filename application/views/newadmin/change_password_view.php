<?php $this->load->view('admin/includes/head')?>
	
<body class="hold-transition sidebar-mini fixed skin-blue-light">
	<div class="wrapper">
			<?php $this->load->view('admin/includes/menu')?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 916px;">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1 class="newfont-header">
				    <i class="fa fa-universal-access" aria-hidden="true"></i> Profile
			 	</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><i class="fa fa-envira"></i> Dashboard</a></li>
				    <li><a href="<?php echo base_url('admin/update_account')?>"><i class="fa fa-universal-access" aria-hidden="true"></i> Profile Account</a></li>
				    <li class="active"><i class="fa fa-wrench" aria-hidden="true"></i> Change Password</li>
				</ol>
				<section class="contentd">
					<br>
					<div class="row">
						<div class="col-md-4">
							<div class="box box-widget widget-user">
					            <div class="widget-user-header bg-green-active">
					              <h3 class="widget-user-username"><?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?></h3>
					              <h5 class="widget-user-desc"><?php echo $user['ugrp_name'];?></h5>
					            </div>
					            <div class="widget-user-image">
					              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('includes/elliot.jpg') ?>" alt="User profile picture">
					            </div>
					            <div class="box-footer">
					              <ul class="nav nav-stacked">
					                <li><a href="#">Register In <span class="pull-right" id="register"></span></a></li>
					                <li><a href="#">Last Login <span class="pull-right" id="last"></span></a></li>
					              </ul>
					            </div>
					        </div>
						</div>
						
						<div class="col-md-8">
						  <div class="box box-widget">
				            <div class="box-header with-border">
				              <div class="user-block">
				                <span ><a href="#" style=";font-size:19px;"><i class="fa fa-expeditedssl"></i> Data Profile</a></span>
				              </div>
				            </div>
				            <div class="box-body">
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#activity" data-toggle="tab">Ganti Password</a></li>
									</ul>
									<div class="tab-content">
										<div class="active tab-pane" id="activity">
										<?php if (! empty($message)) { ?>
											<div class="alert alert-warning" id="message">
												<?php echo $message; ?>
											</div>
											<script type="text/javascript">notify('warning','<?php echo $message?>')</script>
										<?php } ?>
										<?php echo form_open(current_url(),array('role'=>'form','class'=>'form-horizontal'));  ?>
										<div class="form-group">
											<label for="inputName" class="col-sm-3 control-label">Password Sekarang</label>
											<div class="col-sm-8">
												<input class="form-control" placeholder="Tulis Password Saat Ini" type="password" id="current_password" name="current_password" value="<?php echo set_value('current_password');?>"/>
			                          			<h5 class="info"><strong>Ketentuan Password Baru:</strong><br/>
			                                   	Panjang password harus lebih dari <?php echo $this->flexi_auth->min_password_length(); ?> karakter.<br/>
			                                   	Hanya karakter-angka, dashes, underscores, periods and comma characters.
			                                	</h5>
											</div>
										  </div>
					                      <div class="form-group">
					                        <label for="inputName" class="col-sm-3 control-label">Password Baru</label>
					                        <div class="col-sm-8">
					                          <input type="password" onkeypress="kekuatan()" class="form-control" placeholder="Tulis Password Baru" id="new_password" name="new_password" value="<?php echo set_value('new_password');?>"/>
					                        </div>
					                      </div>
					                      <div class="form-group">
					                        <label for="inputName" class="col-sm-3 control-label">Konfirmasi Password Baru</label>
					                        <div class="col-sm-8">
					                          <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Tulis Ulang Password Baru" value="<?php echo set_value('confirm_new_password');?>"/>
					                        </div>
					                      </div>
					                      <div class="form-group">
					                        <div class="col-sm-3"></div>
					                        <div class="col-sm-8">
					                          <button id="submit" type="submit" name="change_password" value="perbarui" class="btn btn-success waves-effect">Perbarui</button>
					                        </div>
					                      </div>
										  <?php echo form_close();?>
										</div>

										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
							</div>
						</div>
						<!-- /.col -->
					</div>
				</section>
					<!-- /.row -->
		</div>
		<!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer')?>
<script type="text/javascript">
	var a = moment(<?php echo substr(str_replace('-','',$user['uacc_date_added']),0,9); ?>,"YYYYMMDD").format('LL');
	$("#register").html(a);
	var b = moment(<?php echo substr(str_replace('-','',$user['uacc_date_last_login']),0,9); ?>,"YYYYMMDD").format('LL');
	$("#last").html(b);
</script>