<form id="addinstansi" role="form">
	<div class="row">
		<div class="col-md-2 col-xs-6">
			<div class="form-group">
				<label>No Urut</label>
				<input class="form-control" type="text" name="no" id="no" placeholder="No Urut">
			</div>
		</div>
		<div class="col-md-2 col-xs-6">
			<div class="form-group">
				<label>Id Kolok</label>
				<input class="form-control" type="text" name="kolok" id="kolok" placeholder="Id Kolok">
			</div>
		</div>
		<div class="col-md-8 col-xs-12">
			<div class="form-group">
				<label>* Nama Instansi</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Instansi">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="form-group">
				<label>Kepala Instansi</label>
				<input class="form-control" type="text" name="kepala" id="kepala" placeholder="Kepala Instansi">
				<span class="text-red" id="invalid-kepala"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
				<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
			</div>
		</div>
	</div>
	</form>
</div>
<script type="text/javascript">
$(document).ready(function() {  
	$("#block").click(function(){
		is_check('is_instansi','POST','<?php echo base_url('admin/is_instansi')?>');
		rule = {
			nama:{
				required:true,
				is_instansi:true
			}
		};

		pesan = {};
		validater('#addinstansi',rule,pesan,'POST','<?php echo base_url('admin/store_instansi')?>','json','#preview',14,1);
	});
});
$(function () {
    $('input.menu').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
});
</script>
