<div class="row">
	<form id="newtahun">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12">
					<div class="form-group">
						<label>Tahun</label>
						<input class="form-control" type="text" name="nama" id="nama" placeholder="Tahun">
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12">
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
		is_check('is_tahun','POST','<?php echo base_url('admin/is_tahun')?>');
		rule = {
			nama:{
				required:true,
				is_tahun:true
			}
		};

		pesan = {};
		validater('#newtahun',rule,pesan,'POST','<?php echo base_url('admin/store_new_tahun')?>','json','#preview',13,1);
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
