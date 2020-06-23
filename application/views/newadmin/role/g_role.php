<div class="row">
	<form id="hakakses">
	<div class="col-xs-12">
		<div class="col-xs-5">
			<label>Nama Aturan</label>
			<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Grup" value="<?php echo $role->upriv_name?>">
			<span class="text-red" id="invalid-nama"></span>
		</div>
		<div class="col-xs-7">
			<label>Deskripsi</label>
			<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc" value="<?php echo $role->upriv_desc?>"><?php echo $role->upriv_desc?></textarea>
			<span class="text-red" id="invalid-desc"></span>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-5">
			<input type="checkbox" class="menu" id="menu" value="1" name="menu" <?php if($role->is_menu == 1){ echo 'checked=chekced';} ?>> Role ini merupakan menu ?
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
	$(function () {
	    $('input.menu').iCheck({
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
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('admin/update_role')?>','json','#preview',12,1);
	});
</script>