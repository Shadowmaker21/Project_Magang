<?php 
	function ugrup($cari,$tes){
		if($cari == $tes){
			echo 'checked';
		} else {
			echo '';
		}
	}
?>
<form id="updateakun">
	<div class="row">
		<div class="col-sm-6">
			<div class="">
				<h5 class="bold">Mengenai User</h5>
				<div class="pad10">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Lengkap</label>
					<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap Anda" value="<?php echo ucwords(str_replace('_',' ', $user->upro_first_name)) ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Telepon</label>
					<input class="form-control" type="text" name="notelp" id="notelp" placeholder="Nomor Telepon" value="<?php echo ucwords(str_replace('_',' ', $user->upro_phone)) ?>">
				</div>
				</div>
				<!-- <h5 class="bold">Grup User</h5>
				<?php foreach($user_groups as $data){ ?>
					<div class="pad5">
						<input type="radio" name="grup" id="grup" <?php ugrup($user->uacc_group_fk,$data->ugrp_id) ?> value="<?php echo $data->ugrp_id?>"> <?php echo ucwords($data->ugrp_name) ?>
							
					</div>
				<?php } ?> -->
			</div>
		</div>
		<div class="col-sm-6">
			<div class="">
				<h5 class="bold">Login User</h5>
				<div class="pad10">
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="hidden" name="salt" id="salt" value="<?php echo $user->uacc_salt?>">
        			<input type="hidden" name="id" id="id" value="<?php echo $user->uacc_id?>">
        			<input type="hidden" name="grup" id="grup" value="<?php echo $user->uacc_group_fk?>">
					<input class="form-control" type="text" name="username" id="username" placeholder="Username user" value="<?php echo $user->uacc_username?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jika Ingin Mengganti Password ?</label>
					<div class="pad10">
						<input type="radio" name="ubah" id="ubah" value="1"> Ya, saya akan mengganti
					</div>
					<div class="pad10">
						<input type="radio" name="ubah" id="ubah" checked="chekced" value="0"> Tidak
					</div>
				</div>
				<div class="changepassword">
				<div class="form-group">
					<label for="exampleInputEmail1">Password</label>
					<input class="form-control" type="password" name="new" id="new" placeholder="Password Baru">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Ulangi Password</label>
					<input class="form-control" type="password" name="confirmnew" id="confirmnew" placeholder="Ulangi Password Baru">
				</div>
				</div>
				</div>
			</div>
			<div class="pull-right">
				<button id="" data-dismiss="modal" class="btn btn-sm bg-blue">Keluar</button>	
				<button type="submit" id="block" class="btn btn-success">Simpan</button>	
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
   	$("#block").click(function(){
      rule = {
		nama:'required',
		notelp:{
			number:true,
			required:true
		},
		username:'required',
		ubah:'required',
		new:'required',
		confirmnew:{
			required:true,
			equalTo: "#new"
		}
	  };

	  pesan = {};
	  validater('#updateakun',rule,pesan,'POST','<?php echo base_url('admin/update_akunpengguna')?>','json','#preview',10,1);
    })
    $('#updateakun input').iCheck({
        radioClass: 'icheckbox_flat-green',
        increaseArea: '20%' // optional
    });
    $(".changepassword").fadeOut(0);
    $('input[name="ubah"]').on('ifClicked', function (event) {
        var a = this.value;
        if(a == 1){
          var t = setTimeout(function() {
            $(".changepassword").fadeIn(1000);
          }, 1000);
        } else {
          var t = setTimeout(function() {
            $(".changepassword").fadeOut(1000);
          }, 1000);
        }
        
    });
</script>
                            