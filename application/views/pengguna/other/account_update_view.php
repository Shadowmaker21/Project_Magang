<?php $this->load->view('pengguna/includes/head')?>
	
<body class="skin-red-light sidebar-mini">
	<div class="wrapper">
  		<?php $this->load->view('pengguna/includes/menu')?>
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
			        <div class="col-md-4">

			          <div class="box box-widget widget-user">
			            <div class="widget-user-header bg-red-active">
			              <h3 style="font-family:jenis7" class="widget-user-username"><?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?></h3>
			              <h5 class="widget-user-desc"><?php echo $user['ugrp_name'];?></h5>
			            </div>
			            <div class="widget-user-image">
			              <img src="<?php echo base_url('includes/steve.jpg')?>" class="img-circle" alt="User Image">
			            </div>
			            <div class="box-footer">
			              <ul class="nav nav-stacked">
			                <li><a href="#">Register In <span class="pull-right" id="register"></span></a></li>
			                <li><a href="#">Last Login <span class="pull-right" id="last"></span></a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			       <!--  <div class="col-md-8">
			          <div class="nav-tabs-custom">
			            <ul class="nav nav-tabs">
			              <li class="active"><a href="#activity" data-toggle="tab">Data Akun</a></li>
			              <li><a href="#settings" data-toggle="tab">Edit Data Akun</a></li>
			            </ul>
			            <div class="tab-content">
			              <div class="active tab-pane" id="activity">
			              <?php if (! empty($message)) { ?>
			                   	<div class="alert alert-info" id="message">
			                       	<?php echo $message; ?>
			                    </div>
			                <?php } ?>
			                <table class="table table-hover">
			                  <thead>
			                    <th>Nama Depan</th>
			                    <td><?php echo $user['upro_first_name'] ?></td>
			                  </thead>
			                  <thead>
			                    <th>Nama Belakang</th>
			                    <td><?php echo $user['upro_last_name'] ?></td>
			                  </thead>
			                  <thead>
			                    <th>Nomor Telepon</th>
			                    <td><?php echo $user['upro_phone'] ?></td>
			                  </thead>
			                  <thead>
			                    <th>Alamat Email</th>
			                    <td><?php echo $user['uacc_email'] ?></td>
			                  </thead>
			                  <thead>
			                    <th>Username</th>
			                    <td><?php echo $user['uacc_username'] ?></td>
			                  </thead>
			                   <thead>
			                    <th>Password</th>
			                    <td> <a href="<?php echo base_url('pengguna/change_password') ?>">Ganti Password</a></td>
			                  </thead>
			                </table>
			              </div>

			              <div class="tab-pane" id="settings">
			                <?php echo form_open(current_url(),array('role'=>'form','class'=> 'form-horizontal'));  ?>      
			                  <div class="form-group">
			                    <label for="inputName" class="col-sm-3 control-label">Name Depan</label>
			                    <div class="col-sm-7">
			                      <input type="text" class="form-control" id="inputName" name="first_name" placeholder="Nama Depan" value="<?php echo $user['upro_first_name'];?>">
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <label for="inputName" class="col-sm-3 control-label">Name Belakang</label>
			                    <div class="col-sm-7">
			                      <input type="text" class="form-control" name="last_name" id="inputName" placeholder="Nama Belakang" value="<?php echo $user['upro_last_name'];?>">
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <label for="inputName" class="col-sm-3 control-label">Nomor Telepon</label>
			                    <div class="col-sm-7">
			                      <input type="text" class="form-control" name="hp" id="inputName" placeholder="Nomor Telepon" value="<?php echo $user['upro_phone'];?>">
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <label for="inputEmail" class="col-sm-3 control-label">Alamat Email</label>
			                    <div class="col-sm-7">
			                      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address" value="<?php echo $user['uacc_email']?>">
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <label for="inputSkills" class="col-sm-3 control-label">Username</label>
			                    <div class="col-sm-7">
			                      <input type="text" class="form-control" name="username" id="inputSkills" placeholder="Username" value="<?php echo $user['uacc_username']?>">
			                    </div>
			                  </div>
			                  <div class="form-group">
			                    <div class="col-sm-offset-2 col-sm-10">
			                      <button type="submit" name="update_account" value="update_account" class="btn btn-success">Submit</button>
			                    </div>
			                  </div>
			                <?php echo form_close() ?>
			              </div>
			            </div>
			          </div>
			        </div> -->
			        <div class="col-md-8">
			        	<div class="box box-widget">
				            <div class="box-header with-border">
				              <div class="user-block">
				                <span ><a href="#" style="font-family:jenis7;font-size:19px;"><i class="fa fa-expeditedssl"></i> Data Profile</a></span>
				              </div>
				            </div>
				            <div class="box-body">
				            	<div class="nav-tabs-custom">
						            <ul class="nav nav-tabs">
						              <li class="active"><a href="#activity" data-toggle="tab"><i class="fa fa-list-alt"></i> Mengenai Profile Saya</a></li>
						              <li><a href="#settings" data-toggle="tab"><i class="fa fa-edit"></i> Edit Data Profile Saya</a></li>
						            </ul>
						            <div class="tab-content">
						              <div class="active tab-pane" id="activity">
						              <?php if (!empty($message)) { ?>
						                   	<div class="alert alert-info" id="message">
						                       	<?php echo $message; ?>
						                    </div>
						                    <script type="text/javascript">notify('info','<?php echo $message?>')</script>
						                <?php } ?>
						                <ul class="nav nav-stacked">
							                <li><a href="#">Nama Depan <span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?></span></a></li>
							                <li><a href="#">Nama Belakang <span class="pull-right"><?php echo ucwords(str_replace('_',' ', $user['upro_last_name'])) ?></span></a></li>
							                <li><a href="#">Nomor Telepon <span class="pull-right"><?php echo $user['upro_phone'] ?></span></a></li>
							                <li><a href="#">Alamat Email <span class="pull-right"><?php echo $user['uacc_email'] ?></span></a></li>
							                <li><a href="#">Username <span class="pull-right"><?php echo $user['uacc_username'] ?></span></a></li>
							                <li><a style="color:#00a7d0" href="<?php echo base_url('pengguna/change_password') ?>"><center><i class="fa fa-external-link"></i> Ganti Password </center></a></li>
							            </ul>
						              </div>

						              <div class="tab-pane" id="settings">
						                <?php echo form_open(current_url(),array('role'=>'form','class'=> 'form-horizontal'));  ?>      
						                  <div class="form-group">
						                    <label for="inputName" class="col-sm-3 control-label">Name Depan</label>
						                    <div class="col-sm-8">
						                      <input type="text" class="form-control" id="inputName" name="first_name" placeholder="Nama Depan" value="<?php echo ucwords(str_replace('_',' ', $user['upro_first_name'])) ?>">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <label for="inputName" class="col-sm-3 control-label">Name Belakang</label>
						                    <div class="col-sm-8">
						                      <input type="text" class="form-control" name="last_name" id="inputName" placeholder="Nama Belakang" value="<?php echo ucwords(str_replace('_',' ', $user['upro_last_name'])) ?>">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <label for="inputName" class="col-sm-3 control-label">Nomor Telepon</label>
						                    <div class="col-sm-8">
						                      <input type="text" class="form-control" name="hp" id="inputName" placeholder="Nomor Telepon" value="<?php echo $user['upro_phone'];?>">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <label for="inputEmail" class="col-sm-3 control-label">Alamat Email</label>
						                    <div class="col-sm-8">
						                      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address" value="<?php echo $user['uacc_email']?>">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <label for="inputSkills" class="col-sm-3 control-label">Username</label>
						                    <div class="col-sm-8">
						                      <input type="text" class="form-control" name="username" id="inputSkills" placeholder="Username" value="<?php echo $user['uacc_username']?>">
						                    </div>
						                  </div>
						                  <div class="form-group">
						                    <div class="col-sm-offset-3 col-sm-10">
						                      <button type="submit" name="update_account" value="update_account" class="btn btn-success">Submit</button>
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

<?php $this->load->view('pengguna/includes/footer')?>
<script type="text/javascript">
  var a = moment(<?php echo substr(str_replace('-','',$user['uacc_date_added']),0,9); ?>,"YYYYMMDD").format('LL');
  $("#register").html(a);
  var b = moment(<?php echo substr(str_replace('-','',$user['uacc_date_last_login']),0,9); ?>,"YYYYMMDD").format('LL');
  $("#last").html(b);
</script>