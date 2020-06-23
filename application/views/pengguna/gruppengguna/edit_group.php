
<div class="row">
	<form id="hakakses">
	<div class="col-xs-12">
		<p class="strong"><i class="fa fa-circle-o text-green"></i> Detail Grup</p>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-5">
			<div class="form-group">
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Grup" value="<?php echo $group->ugrp_name?>">
				<span class="text-red" id="invalid-nama"></span>
			</div>
		</div>
		<div class="col-xs-7">
			<div class="form-group">
				<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc" value="<?php echo $group->ugrp_desc?>"><?php echo $group->ugrp_desc?></textarea>
				<span class="text-red" id="invalid-desc"></span>
			</div>
		</div>
	</div>
	<div class="col-xs-12">
		<p class="strong"><i class="fa fa-circle-o text-green"></i> Role Lists</p>
	</div>
	<div class="col-xs-12">
		<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		<?php $i=1;foreach($privileges as $data){ ?>
		<div class="col-xs-4">
			<input type="checkbox" class="hakakses" id="isian<?php echo $data->upriv_id?>" value="<?php echo $data->upriv_id?>" name="isian<?php echo $data->upriv_id?>" <?php if($data->status == 1){ echo 'checked=chekced';} ?>> <?php echo ucwords($data->upriv_name) ?>
			<input type="hidden" name="id_priv_grup<?php echo $data->upriv_id?>" id="id_priv_grup<?php echo $data->upriv_id?>" value="<?php echo $data->upriv_group_id?>">
		</div>
		<?php if($i%3==0){ echo "<br><br>";} $i++;} ?>
	</div>
	<div class="row">
		<div class="col-xs-12" style="padding-top:20px">
			<div class="col-xs-12">
				<button class="btn bg-teal" data-dismiss="modal"> Batal</button>
				<button type="submit" id="block" class="btn btn-lg bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
			</div>
		</div>
	</div>
	</form>
</div>
<script type="text/javascript">
	$(function () {
	    $('input.hakakses').iCheck({
	      checkboxClass: 'icheckbox_square-aero',
	      increaseArea: '20%' // optional
	    });
	});
	$("#block").click(function(){
		rule = {
			nama:'required',
			desc:'required'
		};

		pesan = {
			nama:'Bidang grup tidak boleh kosong',
			desc:'Bidang description tidak boleh kosong'
		};
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('pengguna/save_user_hakakses_grup')?>','json','#preview',32);
	})
	
</script>