
<div class="row">
	<form id="hakakses">
	<div class="col-xs-12">
		<div class="col-xs-5">
			<div class="form-group">
				<label>Nama Grup</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Grup" value="<?php echo $group->ugrp_name?>">
			</div>
		</div>
		<div class="col-xs-7">
			<div class="form-group">
			<label>Deskripsi Grup</label>
			<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc" value="<?php echo $group->ugrp_desc?>"><?php echo $group->ugrp_desc?></textarea>
			</div>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-12">
			<label>Hak Akses</label>
		</div>
	</div>
	<div class="col-xs-12">
		<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		<?php if($privileges){ ?>
		<?php $i=1;foreach($privileges as $data){ ?>
		<div class="col-xs-3">
			<input type="checkbox" class="hakakses" id="isian<?php echo $data->upriv_id?>" value="<?php echo $data->upriv_id?>" name="isian<?php echo $data->upriv_id?>" <?php if($data->status == 1){ echo 'checked=chekced';} ?>> <?php echo ucwords($data->upriv_name) ?>
			<input type="hidden" name="id_priv_grup<?php echo $data->upriv_id?>" id="id_priv_grup<?php echo $data->upriv_id?>" value="<?php echo $data->upriv_group_id?>">
		</div>
		<?php if($i%4==0){ echo "<br><br>";} $i++;}} else { ?>
			<div class="col-xs-12">
				<i class="fa fa-close"></i> Hak akses tidak ditemukan.	<a href="<?php echo base_url('settings/role')?>">Buat Hak Akses</a>
			</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="col-xs-12" style="padding-top:20px">
			<div class="col-xs-12">
				<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
				<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
			</div>
		</div>
	</div>
	</form>
</div>
<script type="text/javascript">
	$(function () {
	    $('input.hakakses').iCheck({
	      checkboxClass: 'icheckbox_flat-green',
	      increaseArea: '20%' // optional
	    });
	});
	$("#block").click(function(){
		rule = {
			nama:'required',
			desc:'required'
		};

		pesan = {};
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('admin/update_grup')?>','json','#preview',11,1);
	})
	
</script>