	<div class="row">
	<form id="hakakses">
	<div class="col-xs-12">
		<p class="strong"><i class="fa fa-circle-o text-green"></i> Detail Role</p>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-5">
			<div class="form-group">
			<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Role" value="<?php echo $role->upriv_name?>">
			<span class="text-red" id="invalid-nama"></span>
			</div>
		</div>
		<div class="col-xs-7">
			<div class="form-group">
			<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc" value="<?php echo $role->upriv_desc?>"><?php echo $role->upriv_desc?></textarea>
			<span class="text-red" id="invalid-desc"></span>
			</div>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-5">
			<input type="checkbox" class="menu" id="menu" value="1" name="menu" <?php if($role->is_menu == 1){ echo 'checked=chekced';} ?>> Is Menu ?
		</div>
	</div>
	<input type="hidden" name="id" id="id" value="<?php echo $role->upriv_id ?>">
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
	$("#block").click(function(){
		rule = {
			nama:'required',
			desc:'required'
		};

		pesan = {
			nama:'Bidang role tidak boleh kosong',
			desc:'Bidang description tidak boleh kosong'
		};
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('pengguna/update_role')?>','json','#preview',33);
	})

</script>