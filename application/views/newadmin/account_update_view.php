<?php $this->load->view('admin/includes/head')?>
	
<body class="hold-transition sidebar-mini fixed skin-blue-light">
	<div class="wrapper">
  		<?php $this->load->view('admin/includes/menu')?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 916px;">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
				    Profile
			 	</h1>
			   	<ol class="breadcrumb">
				    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				    <li class="active">Profile</li>
				</ol>
				<section class="contentd">
				<br>
			      <div class="row">
			        <div class="col-md-12">

			          <div class="box box-widget widget-user">
			            <div class="widget-user-header bg-aqua-active">
			              <h3 class="widget-user-username newfont"><?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?></h3>
			              <h5 class="widget-user-desc"><?php echo $user['ugrp_name'];?></h5>
			            </div>
			            <div class="widget-user-image">
			              <img src="<?php echo base_url('includes/elliot.jpg')?>" class="img-circle" alt="User Image">
			            </div>
			            <div class="box-footer newfont">
			              <ul class="nav nav-stacked">
			                <li><a href="#">Register In <span class="pull-right" id="register"></span></a></li>
			                <li><a href="#">Last Login <span class="pull-right" id="last"></span></a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-12">
			        	<div class="box box-widget">
				            <div class="box-header with-border">
				              <div class="user-block">
				                <span ><a href="#" style="font-size:19px;"><i class="fa fa-expeditedssl"></i> Data Profile</a></span>
				              </div>
				            </div>
				            <div class="box-body">
				            	<div class="nav-tabs-custom">
						            <ul class="nav nav-tabs newfont">
						              <li class="active"><a href="#activity" class="newfont" data-toggle="tab"><i class="fa fa-list-alt"></i> Profile</a></li>
						              <li><a href="#settings" data-toggle="tab" class="newfont"><i class="fa fa-edit"></i> Edit Profile</a></li>
						            </ul>
						            <div class="tab-content">
						              <div class="active tab-pane" id="activity">
						              <?php if (!empty($message)) { ?>
						                   	<div class="alert alert-info" id="message">
						                       	<?php echo $message; ?>
						                    </div>
						                    <script type="text/javascript">notify('info','<?php echo $message?>')</script>
						                <?php } ?>
						                <h5 class="newfon600" style="font-weight:600">Data SKPD</h5>
						                <ul class="nav nav-stacked">
							                <li><a href="#">SKPD <span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?></span></a></li>
							                <li><a href="#">Alamat<span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_skpd_address'])) ?></span></a></li>
							                <li><a href="#">No.Telp<span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_skpd_telp'])) ?></span></a></li>
							                <li><a href="#">Kode Pos<span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_skpd_kodepos'])) ?></span></a></li>
							                <li><a href="#">Faximile<span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_skpd_faximile'])) ?></span></a></li>
							                <li><a href="#">Alamat Email <span class="pull-right"><?php echo $user['upro_skpd_email'] ?></span></a></li>
							                <li><a href="#">Alamat Website <span class="pull-right"><?php echo $user['upro_skpd_website'] ?></span></a></li>
							            </ul>
							            <h5 class="newfon600" style="font-weight:600">Data Admin</h5>
							            <ul class="nav nav-stacked">
							                <li><a href="#">Nama Admin <span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_last_name'])) ?></span></a></li>
							                <li><a href="#">No.Telp<span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_phone'])) ?></span></a></li>
							            </ul>
							            <h5 class="newfon600" style="font-weight:600">Data Login Sistem</h5>
							            <ul class="nav nav-stacked">
							                <li><a href="#">Email <span class="pull-right"><?php echo $user['uacc_email'] ?></span></a></li>
							                <li><a href="#">Username<span class="pull-right"><?php echo $user['uacc_username'] ?></span></a></li>
							                <!-- <li><a href="#">Password<span class="pull-right"><?php echo $user['uacc_password'] ?></span></a></li> -->
							            </ul>
						              </div>

						              <div class="tab-pane" id="settings">
						                <?php echo form_open(current_url(),array('role'=>'form','class'=> 'form-horizontal'));  ?>      
						                  	<div class="row">
							                  	<div class="col-sm-6">
								                  <h5 class="newfon600" style="font-weight:600">Data SKPD</h5>
								                  <div class="form-group">
								                    <label for="inputName" class="col-sm-3 control-label">SKPD</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama SKPD" value="<?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputName" class="col-sm-3 control-label">Alamat</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat SKPD" value="<?php echo ucwords(str_replace('_',' ', $user['upro_skpd_address'])) ?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputName" class="col-sm-3 control-label">Nomor Telepon SKPD</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" name="nomortelepon" id="nomortelepon" placeholder="Nomor Telepon SKPD" value="<?php echo $user['upro_skpd_telp'];?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputName" class="col-sm-3 control-label">Kode Pos</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kode Pos" value="<?php echo $user['upro_skpd_kodepos'];?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputName" class="col-sm-3 control-label">Faximile</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" name="faximile" id="faximile" placeholder="Faximile" value="<?php echo $user['upro_skpd_faximile'];?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputEmail" class="col-sm-3 control-label">Alamat Email</label>
								                    <div class="col-sm-9">
								                      <input type="email" class="form-control" name="emailskpd" id="emailskpd" placeholder="Email SKPD" value="<?php echo $user['upro_skpd_email']?>">
								                    </div>
								                  </div>
								                  <div class="form-group">
								                    <label for="inputEmail" class="col-sm-3 control-label">Alamat Website</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" name="website" id="website" placeholder="Email Address" value="<?php echo $user['upro_skpd_website']?>">
								                    </div>
								                  </div>
								                  
								              	</div>
								                <div class="col-sm-6">
								                	<h5 class="newfon600" style="font-weight:600">Data Admin</h5>
								                 	<div class="form-group">
									                   	<label for="inputName" class="col-sm-3 control-label">Nama Admin</label>
								                       	<div class="col-sm-9">
								                      		<input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="Nama Admin" value="<?php echo ucwords(str_replace('_',' ', $user['upro_last_name'])) ?>">
								                    	</div>
								                  	</div>
								                  	<div class="form-group">
									                   	<label for="inputName" class="col-sm-3 control-label">Nomor Telepon Admin</label>
								                       	<div class="col-sm-9">
								                      		<input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon Admin" value="<?php echo ucwords(str_replace('_',' ', $user['upro_phone'])) ?>">
								                    	</div>
								                  	</div>
								                  	<h5 class="newfon600" style="font-weight:600">Data Login Sistem</h5>
								                  	<div class="form-group">
									                   	<label for="inputName" class="col-sm-3 control-label">Alamat Email (Login)</label>
								                       	<div class="col-sm-9">
								                      		<input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email Untuk Login" value="<?php echo $user['uacc_email'] ?>">
								                    	</div>
								                  	</div>
								                  	<div class="form-group">
									                   	<label for="inputName" class="col-sm-3 control-label">Username (Login)</label>
								                       	<div class="col-sm-9">
								                      		<input type="text" class="form-control" id="username" name="username" placeholder="Username Untuk Login" value="<?php echo $user['uacc_username'] ?>">
								                    	</div>
								                  	</div>
								                  	<div class="form-group">
									                   	<label for="inputName" class="col-sm-3 control-label">Passwords</label>
								                       	<div class="col-sm-9">
								                      		<a class="btn bg-blue" style="color:#00a7d0" href="<?php echo base_url('admin/change_password') ?>"><i class="fa fa-external-link"></i> Ganti Password</a>
								                    	</div>
								                  	</div>
								                  	<div class="form-group">
								                    <div class="col-sm-offset-3 col-sm-12">
								                      <button type="submit" name="update_account" value="update_account" class="btn btn-success">Submit</button>
								                    </div>
								                  </div>
								                </div>
								            </div>
						                <?php echo form_close() ?>
						              </div>
						            </div>
						        </div>
				            </div>
				         </div>
			        </div>
			      </div>
			    </section>
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