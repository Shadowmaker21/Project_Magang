<div class="row">
	<form id="hakakses">
	<div class="col-xs-12">
		<div class="col-xs-12">
			<div class="form-group">
				<label>Nama Tahun</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Tahun" value="<?php echo $tahun->nama_tahun?>">
			</div>
		</div>
	</div>
	<input type="hidden" name="id" id="id" value="<?php echo $tahun->id_tahun ?>">
	<div class="col-xs-12" style="padding-top:20px">
		<div class="col-xs-12">
			<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
			<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
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
			nama:'required'
		};

		pesan = {};
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('admin/update_tahun')?>','json','#preview',13,1);
	});
</script>