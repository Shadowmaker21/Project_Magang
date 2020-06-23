<form id="hakakses" role="form">
	<div class="row">
		<div class="col-md-2 col-xs-6">
			<div class="form-group">
				<label>No Urut</label>
				<input class="form-control" type="text" name="no" id="no" placeholder="No Urut" value="<?php echo $instansi->urut ?>">
			</div>
		</div>
		<div class="col-md-2 col-xs-6">
			<div class="form-group">
				<label>Id Kolok</label>
				<input class="form-control" type="text" name="kolok" id="kolok" placeholder="Id Kolok" value="<?php echo $instansi->kolok ?>">
			</div>
		</div>
		<div class="col-md-8 col-xs-12">
			<div class="form-group">
				<label>* Nama Instansi</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Instansi" value="<?php echo $instansi->nama_dinas ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="form-group">
				<label>Kepala Instansi</label>
				<input class="form-control" type="text" name="kepala" id="kepala" placeholder="Kepala Instansi" value="<?php echo $instansi->kepala ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<input type="hidden" name="id" id="id" value="<?php echo $instansi->id ?>">
		<div class="col-md-12 col-xs-12">
			<div class="form-group">
				<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
				<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
			</div>
		</div>
	</div>
</form>
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
		validater('#hakakses',rule,pesan,'POST','<?php echo base_url('admin/update_instansi')?>','json','#preview',14,1);
	})
	$(function () {
	    $('input.menu').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' // optional
	    });
	});
</script>